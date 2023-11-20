<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewShrinkRequest\scopes;
use AlibabaCloud\Tea\Model;

class UpdateOpaStrategyNewShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alarmDetailShrink;

    /**
     * @example c870ec78ecbcb41d2a35c679823ef****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example docker-law
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 4566
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $imageName;

    /**
     * @var string[]
     */
    public $label;

    /**
     * @example true
     *
     * @var bool
     */
    public $maliciousImage;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleAction;

    /**
     * @var scopes[]
     */
    public $scopes;

    /**
     * @example 1003
     *
     * @var int
     */
    public $strategyId;

    /**
     * @example test
     *
     * @var string
     */
    public $strategyName;

    /**
     * @example 109
     *
     * @var int
     */
    public $strategyTemplateId;

    /**
     * @example true
     *
     * @var bool
     */
    public $unScanedImage;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'alarmDetailShrink'  => 'AlarmDetail',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'description'        => 'Description',
        'imageName'          => 'ImageName',
        'label'              => 'Label',
        'maliciousImage'     => 'MaliciousImage',
        'ruleAction'         => 'RuleAction',
        'scopes'             => 'Scopes',
        'strategyId'         => 'StrategyId',
        'strategyName'       => 'StrategyName',
        'strategyTemplateId' => 'StrategyTemplateId',
        'unScanedImage'      => 'UnScanedImage',
        'whiteList'          => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmDetailShrink) {
            $res['AlarmDetail'] = $this->alarmDetailShrink;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->maliciousImage) {
            $res['MaliciousImage'] = $this->maliciousImage;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->scopes) {
            $res['Scopes'] = [];
            if (null !== $this->scopes && \is_array($this->scopes)) {
                $n = 0;
                foreach ($this->scopes as $item) {
                    $res['Scopes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->strategyTemplateId) {
            $res['StrategyTemplateId'] = $this->strategyTemplateId;
        }
        if (null !== $this->unScanedImage) {
            $res['UnScanedImage'] = $this->unScanedImage;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOpaStrategyNewShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmDetail'])) {
            $model->alarmDetailShrink = $map['AlarmDetail'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageName'])) {
            if (!empty($map['ImageName'])) {
                $model->imageName = $map['ImageName'];
            }
        }
        if (isset($map['Label'])) {
            if (!empty($map['Label'])) {
                $model->label = $map['Label'];
            }
        }
        if (isset($map['MaliciousImage'])) {
            $model->maliciousImage = $map['MaliciousImage'];
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['Scopes'])) {
            if (!empty($map['Scopes'])) {
                $model->scopes = [];
                $n             = 0;
                foreach ($map['Scopes'] as $item) {
                    $model->scopes[$n++] = null !== $item ? scopes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StrategyTemplateId'])) {
            $model->strategyTemplateId = $map['StrategyTemplateId'];
        }
        if (isset($map['UnScanedImage'])) {
            $model->unScanedImage = $map['UnScanedImage'];
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }

        return $model;
    }
}
