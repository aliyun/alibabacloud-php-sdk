<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\scopes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var alarmDetail
     */
    public $alarmDetail;

    /**
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 4
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example Custom defense configuration
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
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example true
     *
     * @var bool
     */
    public $maliciousImage;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

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
     * @example 1005
     *
     * @var int
     */
    public $strategyId;

    /**
     * @example test001
     *
     * @var string
     */
    public $strategyName;

    /**
     * @example 1204
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
        'alarmDetail'        => 'AlarmDetail',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'currentPage'        => 'CurrentPage',
        'description'        => 'Description',
        'imageName'          => 'ImageName',
        'label'              => 'Label',
        'lang'               => 'Lang',
        'maliciousImage'     => 'MaliciousImage',
        'pageSize'           => 'PageSize',
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
        if (null !== $this->alarmDetail) {
            $res['AlarmDetail'] = null !== $this->alarmDetail ? $this->alarmDetail->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->maliciousImage) {
            $res['MaliciousImage'] = $this->maliciousImage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MaliciousImage'])) {
            $model->maliciousImage = $map['MaliciousImage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
