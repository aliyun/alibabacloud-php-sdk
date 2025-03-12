<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetStrategyTemplateDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetStrategyTemplateDetailResponseBody\data\alarmDetail;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The configuration of the rule.
     *
     * @var alarmDetail
     */
    public $alarmDetail;

    /**
     * @description The cluster ID.
     *
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example hhht-cluster-02
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The description of the rule.
     *
     * @example Custom defense configuration
     *
     * @var string
     */
    public $description;

    /**
     * @description The names of images.
     *
     * @var string[]
     */
    public $imageName;

    /**
     * @description The tags that are added to the containers.
     *
     * @var string[]
     */
    public $label;

    /**
     * @description Indicates whether the rule supports malicious Internet images. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $maliciousImage;

    /**
     * @description The namespaces.
     *
     * @var string[]
     */
    public $namespace;

    /**
     * @description The action on requests. Valid values:
     *
     *   **1**: trigger alerts
     *   **2**: block
     *   **3**: allow
     *
     * @example 1
     *
     * @var int
     */
    public $ruleAction;

    /**
     * @description The ID of the rule.
     *
     * @example 1005
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The name of the rule.
     *
     * @example Blank template
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description The ID of the template.
     *
     * @example 1204
     *
     * @var int
     */
    public $strategyTemplateId;

    /**
     * @description Indicates whether the rule supports unscanned images. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $unScanedImage;

    /**
     * @description The whitelists of tags that are added to images.
     *
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'alarmDetail'        => 'AlarmDetail',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'description'        => 'Description',
        'imageName'          => 'ImageName',
        'label'              => 'Label',
        'maliciousImage'     => 'MaliciousImage',
        'namespace'          => 'Namespace',
        'ruleAction'         => 'RuleAction',
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
        if (null !== $this->alarmDetail) {
            $res['AlarmDetail'] = null !== $this->alarmDetail ? $this->alarmDetail->toMap() : null;
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
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
     * @return data
     */
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
        if (isset($map['Namespace'])) {
            if (!empty($map['Namespace'])) {
                $model->namespace = $map['Namespace'];
            }
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
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
