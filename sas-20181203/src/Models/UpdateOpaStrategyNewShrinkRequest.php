<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewShrinkRequest\scopes;
use AlibabaCloud\Tea\Model;

class UpdateOpaStrategyNewShrinkRequest extends Model
{
    /**
     * @description The rule configuration.
     *
     * @var string
     */
    public $alarmDetailShrink;

    /**
     * @description The cluster ID.
     *
     * > This parameter is deprecated. You can use the Scopes parameter to specify a scope in which cluster parameters take effect.
     * @example c870ec78ecbcb41d2a35c679823ef****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster name.
     *
     * > This parameter is deprecated.
     * @example docker-law
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The rule description.
     *
     * @example 4566
     *
     * @var string
     */
    public $description;

    /**
     * @description The image names.
     *
     * @var string[]
     */
    public $imageName;

    /**
     * @description The image tags.
     *
     * @var string[]
     */
    public $label;

    /**
     * @description Specifies whether the rule supports malicious Internet images. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $maliciousImage;

    /**
     * @description The action that is performed when the rule is hit. Valid values:
     *
     *   **1**: alert
     *   **2**: block
     *   **3**: allow
     *
     * @example 1
     *
     * @var int
     */
    public $ruleAction;

    /**
     * @description The application scope.
     *
     * @var scopes[]
     */
    public $scopes;

    /**
     * @description The rule ID.
     *
     * >  You can call the [ListOpaClusterStrategyNew](https://help.aliyun.com/document_detail/2623574.html) operation to query the rule ID.
     * @example 1003
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The rule name.
     *
     * @example test
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description The ID of the rule template.
     *
     * >  You can call the [GetOpaStrategyTemplateSummary](https://help.aliyun.com/document_detail/2539952.html) operation to query the ID of the rule template.
     * @example 109
     *
     * @var int
     */
    public $strategyTemplateId;

    /**
     * @description Specifies whether the rule supports unscanned images. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $unScanedImage;

    /**
     * @description The whitelists.
     *
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
