<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeRouteDistributionStrategiesResponseBody\strategies;

use AlibabaCloud\Dara\Model;

class strategy extends Model
{
    /**
     * @var string
     */
    public $conflictInfo;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $destCidrBlock;

    /**
     * @var string
     */
    public $hcInstanceId;

    /**
     * @var bool
     */
    public $isConflict;

    /**
     * @var string
     */
    public $routeDistribution;

    /**
     * @var string
     */
    public $routeSource;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strategyPublishStatus;
    protected $_name = [
        'conflictInfo' => 'ConflictInfo',
        'createTime' => 'CreateTime',
        'destCidrBlock' => 'DestCidrBlock',
        'hcInstanceId' => 'HcInstanceId',
        'isConflict' => 'IsConflict',
        'routeDistribution' => 'RouteDistribution',
        'routeSource' => 'RouteSource',
        'smartAGId' => 'SmartAGId',
        'sourceType' => 'SourceType',
        'status' => 'Status',
        'strategyPublishStatus' => 'StrategyPublishStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflictInfo) {
            $res['ConflictInfo'] = $this->conflictInfo;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->destCidrBlock) {
            $res['DestCidrBlock'] = $this->destCidrBlock;
        }

        if (null !== $this->hcInstanceId) {
            $res['HcInstanceId'] = $this->hcInstanceId;
        }

        if (null !== $this->isConflict) {
            $res['IsConflict'] = $this->isConflict;
        }

        if (null !== $this->routeDistribution) {
            $res['RouteDistribution'] = $this->routeDistribution;
        }

        if (null !== $this->routeSource) {
            $res['RouteSource'] = $this->routeSource;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strategyPublishStatus) {
            $res['StrategyPublishStatus'] = $this->strategyPublishStatus;
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
        if (isset($map['ConflictInfo'])) {
            $model->conflictInfo = $map['ConflictInfo'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DestCidrBlock'])) {
            $model->destCidrBlock = $map['DestCidrBlock'];
        }

        if (isset($map['HcInstanceId'])) {
            $model->hcInstanceId = $map['HcInstanceId'];
        }

        if (isset($map['IsConflict'])) {
            $model->isConflict = $map['IsConflict'];
        }

        if (isset($map['RouteDistribution'])) {
            $model->routeDistribution = $map['RouteDistribution'];
        }

        if (isset($map['RouteSource'])) {
            $model->routeSource = $map['RouteSource'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StrategyPublishStatus'])) {
            $model->strategyPublishStatus = $map['StrategyPublishStatus'];
        }

        return $model;
    }
}
