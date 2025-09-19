<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewRequest\alarmDetail;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewRequest\scopes;

class UpdateOpaStrategyNewRequest extends Model
{
    /**
     * @var alarmDetail
     */
    public $alarmDetail;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
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
     * @var bool
     */
    public $maliciousImage;

    /**
     * @var int
     */
    public $ruleAction;

    /**
     * @var scopes[]
     */
    public $scopes;

    /**
     * @var int
     */
    public $strategyId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var int
     */
    public $strategyTemplateId;

    /**
     * @var bool
     */
    public $unScanedImage;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'alarmDetail' => 'AlarmDetail',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'description' => 'Description',
        'imageName' => 'ImageName',
        'label' => 'Label',
        'maliciousImage' => 'MaliciousImage',
        'ruleAction' => 'RuleAction',
        'scopes' => 'Scopes',
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'strategyTemplateId' => 'StrategyTemplateId',
        'unScanedImage' => 'UnScanedImage',
        'whiteList' => 'WhiteList',
    ];

    public function validate()
    {
        if (null !== $this->alarmDetail) {
            $this->alarmDetail->validate();
        }
        if (\is_array($this->imageName)) {
            Model::validateArray($this->imageName);
        }
        if (\is_array($this->label)) {
            Model::validateArray($this->label);
        }
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        if (\is_array($this->whiteList)) {
            Model::validateArray($this->whiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmDetail) {
            $res['AlarmDetail'] = null !== $this->alarmDetail ? $this->alarmDetail->toArray($noStream) : $this->alarmDetail;
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
            if (\is_array($this->imageName)) {
                $res['ImageName'] = [];
                $n1 = 0;
                foreach ($this->imageName as $item1) {
                    $res['ImageName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            if (\is_array($this->label)) {
                $res['Label'] = [];
                $n1 = 0;
                foreach ($this->label as $item1) {
                    $res['Label'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maliciousImage) {
            $res['MaliciousImage'] = $this->maliciousImage;
        }

        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }

        if (null !== $this->scopes) {
            if (\is_array($this->scopes)) {
                $res['Scopes'] = [];
                $n1 = 0;
                foreach ($this->scopes as $item1) {
                    $res['Scopes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->whiteList)) {
                $res['WhiteList'] = [];
                $n1 = 0;
                foreach ($this->whiteList as $item1) {
                    $res['WhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AlarmDetail'])) {
            $model->alarmDetail = alarmDetail::fromMap($map['AlarmDetail']);
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
                $model->imageName = [];
                $n1 = 0;
                foreach ($map['ImageName'] as $item1) {
                    $model->imageName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Label'])) {
            if (!empty($map['Label'])) {
                $model->label = [];
                $n1 = 0;
                foreach ($map['Label'] as $item1) {
                    $model->label[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Scopes'] as $item1) {
                    $model->scopes[$n1] = scopes::fromMap($item1);
                    ++$n1;
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
                $model->whiteList = [];
                $n1 = 0;
                foreach ($map['WhiteList'] as $item1) {
                    $model->whiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
