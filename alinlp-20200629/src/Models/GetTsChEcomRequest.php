<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetTsChEcomRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $originQ;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $originT;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'originQ'     => 'OriginQ',
        'originT'     => 'OriginT',
        'serviceCode' => 'ServiceCode',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originQ) {
            $res['OriginQ'] = $this->originQ;
        }
        if (null !== $this->originT) {
            $res['OriginT'] = $this->originT;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTsChEcomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginQ'])) {
            $model->originQ = $map['OriginQ'];
        }
        if (isset($map['OriginT'])) {
            $model->originT = $map['OriginT'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
