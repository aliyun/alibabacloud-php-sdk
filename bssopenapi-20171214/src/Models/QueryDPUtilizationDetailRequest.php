<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryDPUtilizationDetailRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $lastToken;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var bool
     */
    public $includeShare;

    /**
     * @var string
     */
    public $prodCode;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'instanceSpec'       => 'InstanceSpec',
        'commodityCode'      => 'CommodityCode',
        'deductedInstanceId' => 'DeductedInstanceId',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
        'lastToken'          => 'LastToken',
        'limit'              => 'Limit',
        'includeShare'       => 'IncludeShare',
        'prodCode'           => 'ProdCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->deductedInstanceId) {
            $res['DeductedInstanceId'] = $this->deductedInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lastToken) {
            $res['LastToken'] = $this->lastToken;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->includeShare) {
            $res['IncludeShare'] = $this->includeShare;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDPUtilizationDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DeductedInstanceId'])) {
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LastToken'])) {
            $model->lastToken = $map['LastToken'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['IncludeShare'])) {
            $model->includeShare = $map['IncludeShare'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        return $model;
    }
}
