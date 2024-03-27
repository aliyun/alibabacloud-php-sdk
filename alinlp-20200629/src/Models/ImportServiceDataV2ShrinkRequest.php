<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class ImportServiceDataV2ShrinkRequest extends Model
{
    /**
     * @example docuemnt
     *
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $documentsShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'dataType'        => 'DataType',
        'documentsShrink' => 'Documents',
        'serviceId'       => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->documentsShrink) {
            $res['Documents'] = $this->documentsShrink;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportServiceDataV2ShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Documents'])) {
            $model->documentsShrink = $map['Documents'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
