<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $parametersShrink;
    protected $_name = [
        'serviceCode'      => 'ServiceCode',
        'parametersShrink' => 'Parameters',
    ];

    public function validate()
    {
        Model::validateRequired('serviceCode', $this->serviceCode, true);
        Model::validateRequired('parametersShrink', $this->parametersShrink, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        return $model;
    }
}
