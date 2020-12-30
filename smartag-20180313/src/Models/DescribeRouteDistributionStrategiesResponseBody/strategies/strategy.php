<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeRouteDistributionStrategiesResponseBody\strategies;

use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strategyPublishStatus;

    /**
     * @var string
     */
    public $routeDistribution;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var bool
     */
    public $isConflict;

    /**
     * @var string
     */
    public $destCidrBlock;

    /**
     * @var string
     */
    public $conflictInfo;

    /**
     * @var string
     */
    public $hcInstanceId;

    /**
     * @var string
     */
    public $routeSource;
    protected $_name = [
        'status'                => 'Status',
        'strategyPublishStatus' => 'StrategyPublishStatus',
        'routeDistribution'     => 'RouteDistribution',
        'createTime'            => 'CreateTime',
        'smartAGId'             => 'SmartAGId',
        'sourceType'            => 'SourceType',
        'isConflict'            => 'IsConflict',
        'destCidrBlock'         => 'DestCidrBlock',
        'conflictInfo'          => 'ConflictInfo',
        'hcInstanceId'          => 'HcInstanceId',
        'routeSource'           => 'RouteSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyPublishStatus) {
            $res['StrategyPublishStatus'] = $this->strategyPublishStatus;
        }
        if (null !== $this->routeDistribution) {
            $res['RouteDistribution'] = $this->routeDistribution;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->isConflict) {
            $res['IsConflict'] = $this->isConflict;
        }
        if (null !== $this->destCidrBlock) {
            $res['DestCidrBlock'] = $this->destCidrBlock;
        }
        if (null !== $this->conflictInfo) {
            $res['ConflictInfo'] = $this->conflictInfo;
        }
        if (null !== $this->hcInstanceId) {
            $res['HcInstanceId'] = $this->hcInstanceId;
        }
        if (null !== $this->routeSource) {
            $res['RouteSource'] = $this->routeSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyPublishStatus'])) {
            $model->strategyPublishStatus = $map['StrategyPublishStatus'];
        }
        if (isset($map['RouteDistribution'])) {
            $model->routeDistribution = $map['RouteDistribution'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['IsConflict'])) {
            $model->isConflict = $map['IsConflict'];
        }
        if (isset($map['DestCidrBlock'])) {
            $model->destCidrBlock = $map['DestCidrBlock'];
        }
        if (isset($map['ConflictInfo'])) {
            $model->conflictInfo = $map['ConflictInfo'];
        }
        if (isset($map['HcInstanceId'])) {
            $model->hcInstanceId = $map['HcInstanceId'];
        }
        if (isset($map['RouteSource'])) {
            $model->routeSource = $map['RouteSource'];
        }

        return $model;
    }
}
