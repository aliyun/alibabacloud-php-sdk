<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListUserResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @example brainindustrial_simupostpaid_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 2024-12-21
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 12345ea3cff446e8837078c2baffbe83
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 20240902
     *
     * @var string
     */
    public $startDate;

    /**
     * @example ""
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMsg;
    protected $_name = [
        'chargeType' => 'chargeType',
        'commodityCode' => 'commodityCode',
        'endDate' => 'endDate',
        'instanceId' => 'instanceId',
        'region' => 'region',
        'startDate' => 'startDate',
        'status' => 'status',
        'statusMsg' => 'statusMsg',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusMsg) {
            $res['statusMsg'] = $this->statusMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['statusMsg'])) {
            $model->statusMsg = $map['statusMsg'];
        }

        return $model;
    }
}
