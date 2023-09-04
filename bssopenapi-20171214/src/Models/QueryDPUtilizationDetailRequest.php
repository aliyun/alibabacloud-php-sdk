<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryDPUtilizationDetailRequest extends Model
{
    /**
     * @description The code of the resource, such as ecsRi and scu_bag. If this parameter is specified, the ProdCode parameter does not take effect for the request.
     *
     * @example ecsRi
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The ID of the deducted instance. If this parameter is not specified, the details of all instances are returned.
     *
     * @example oss-123123
     *
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @description The end of the time range to query. Specify the time in the YYYY-MM-DD HH:mm:ss format.
     *
     * @example 2019-05-23 12:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to query the resource plan usage of linked accounts. Valid values:
     *
     *   true: queries the resource plan usage of linked accounts.
     *   false: does not query the resource plan usage of linked accounts.
     *
     * @example true
     *
     * @var bool
     */
    public $includeShare;

    /**
     * @description The ID of the instance to query. If this parameter is not specified, the details of all used instances are returned.
     *
     * @example oss-123123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance type of the instance.
     *
     * @example Instancetyp
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The token that is used to retrieve the next page of results. For the first query, set the value to null. For subsequent queries, set the value to the token that is obtained from the NextToken parameter.
     *
     * @example CAESF***zNTAw
     *
     * @var string
     */
    public $lastToken;

    /**
     * @description The number of entries to return on each page. Default value: 20. Maximum value: 300.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The code of the service. Example: ecs.
     *
     * @example oss
     *
     * @var string
     */
    public $prodCode;

    /**
     * @description The beginning of the time range to query. Specify the time in the YYYY-MM-DD HH:mm:ss format.
     *
     * @example 2019-05-23 12:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'commodityCode'      => 'CommodityCode',
        'deductedInstanceId' => 'DeductedInstanceId',
        'endTime'            => 'EndTime',
        'includeShare'       => 'IncludeShare',
        'instanceId'         => 'InstanceId',
        'instanceSpec'       => 'InstanceSpec',
        'lastToken'          => 'LastToken',
        'limit'              => 'Limit',
        'prodCode'           => 'ProdCode',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->deductedInstanceId) {
            $res['DeductedInstanceId'] = $this->deductedInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->includeShare) {
            $res['IncludeShare'] = $this->includeShare;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->lastToken) {
            $res['LastToken'] = $this->lastToken;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DeductedInstanceId'])) {
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IncludeShare'])) {
            $model->includeShare = $map['IncludeShare'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['LastToken'])) {
            $model->lastToken = $map['LastToken'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
