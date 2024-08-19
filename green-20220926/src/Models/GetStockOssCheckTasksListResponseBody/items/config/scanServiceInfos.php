<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetStockOssCheckTasksListResponseBody\items\config;

use AlibabaCloud\Tea\Model;

class scanServiceInfos extends Model
{
    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $copyFrom;

    /**
     * @example false
     *
     * @var bool
     */
    public $isCopy;

    /**
     * @example baselineCheck_01
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'copyFrom'    => 'CopyFrom',
        'isCopy'      => 'IsCopy',
        'serviceCode' => 'ServiceCode',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return scanServiceInfos
     */
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
