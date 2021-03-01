<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody\flowControlsMap\ruleList\ruleResultList;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $state;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $consumerAppId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var int
     */
    public $threshold;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'updateTime'    => 'UpdateTime',
        'ruleType'      => 'RuleType',
        'state'         => 'State',
        'createTime'    => 'CreateTime',
        'consumerAppId' => 'ConsumerAppId',
        'ruleId'        => 'RuleId',
        'strategy'      => 'Strategy',
        'resource'      => 'Resource',
        'appId'         => 'AppId',
        'granularity'   => 'Granularity',
        'threshold'     => 'Threshold',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->consumerAppId) {
            $res['ConsumerAppId'] = $this->consumerAppId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ConsumerAppId'])) {
            $model->consumerAppId = $map['ConsumerAppId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
