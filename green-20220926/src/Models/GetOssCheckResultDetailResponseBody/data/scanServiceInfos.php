<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckResultDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class scanServiceInfos extends Model
{
    /**
     * @var string
     */
    public $copyFrom;

    /**
     * @var bool
     */
    public $isCopy;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'copyFrom' => 'CopyFrom',
        'isCopy' => 'IsCopy',
        'serviceCode' => 'ServiceCode',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->copyFrom) {
            $res['CopyFrom'] = $this->copyFrom;
        }

        if (null !== $this->isCopy) {
            $res['IsCopy'] = $this->isCopy;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CopyFrom'])) {
            $model->copyFrom = $map['CopyFrom'];
        }

        if (isset($map['IsCopy'])) {
            $model->isCopy = $map['IsCopy'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
