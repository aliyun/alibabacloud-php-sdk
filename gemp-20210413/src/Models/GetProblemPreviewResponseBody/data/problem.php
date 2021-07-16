<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem\coordinationGroups;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem\effectionServices;
use AlibabaCloud\Tea\Model;

class problem extends Model
{
    /**
     * @description 故障名称
     *
     * @var string
     */
    public $problemName;

    /**
     * @description 故障状态 1 处理中 2已恢复 3复盘中 4已复盘 5已取消
     *
     * @var string
     */
    public $problemStatus;

    /**
     * @description 故障等级 1=P1 2=P2 3=P3 4=P4
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @description 发现时间
     *
     * @var string
     */
    public $discoverTime;

    /**
     * @description 恢复时间
     *
     * @var string
     */
    public $recoveryTime;

    /**
     * @description 关联服务 名称
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 进展摘要
     *
     * @var string
     */
    public $progressSummary;

    /**
     * @description 初步原因
     *
     * @var string
     */
    public $preliminaryReason;

    /**
     * @description 主要处理人
     *
     * @var string
     */
    public $mainHandlerName;

    /**
     * @description 主要处理人Id
     *
     * @var string
     */
    public $mainHandlerId;

    /**
     * @description 是否手动
     *
     * @var bool
     */
    public $isManual;

    /**
     * @description 是否升级
     *
     * @var bool
     */
    public $isUpgrade;

    /**
     * @description 故障Id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 关联服务ID
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 应急协同组
     *
     * @var coordinationGroups[]
     */
    public $coordinationGroups;

    /**
     * @description 影响服务
     *
     * @var effectionServices[]
     */
    public $effectionServices;
    protected $_name = [
        'problemName'        => 'problemName',
        'problemStatus'      => 'problemStatus',
        'problemLevel'       => 'problemLevel',
        'discoverTime'       => 'discoverTime',
        'recoveryTime'       => 'recoveryTime',
        'serviceName'        => 'serviceName',
        'progressSummary'    => 'progressSummary',
        'preliminaryReason'  => 'preliminaryReason',
        'mainHandlerName'    => 'mainHandlerName',
        'mainHandlerId'      => 'mainHandlerId',
        'isManual'           => 'isManual',
        'isUpgrade'          => 'isUpgrade',
        'problemId'          => 'problemId',
        'relatedServiceId'   => 'relatedServiceId',
        'createTime'         => 'createTime',
        'coordinationGroups' => 'coordinationGroups',
        'effectionServices'  => 'effectionServices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
        }
        if (null !== $this->problemStatus) {
            $res['problemStatus'] = $this->problemStatus;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->discoverTime) {
            $res['discoverTime'] = $this->discoverTime;
        }
        if (null !== $this->recoveryTime) {
            $res['recoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->progressSummary) {
            $res['progressSummary'] = $this->progressSummary;
        }
        if (null !== $this->preliminaryReason) {
            $res['preliminaryReason'] = $this->preliminaryReason;
        }
        if (null !== $this->mainHandlerName) {
            $res['mainHandlerName'] = $this->mainHandlerName;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->isManual) {
            $res['isManual'] = $this->isManual;
        }
        if (null !== $this->isUpgrade) {
            $res['isUpgrade'] = $this->isUpgrade;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->coordinationGroups) {
            $res['coordinationGroups'] = [];
            if (null !== $this->coordinationGroups && \is_array($this->coordinationGroups)) {
                $n = 0;
                foreach ($this->coordinationGroups as $item) {
                    $res['coordinationGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->effectionServices) {
            $res['effectionServices'] = [];
            if (null !== $this->effectionServices && \is_array($this->effectionServices)) {
                $n = 0;
                foreach ($this->effectionServices as $item) {
                    $res['effectionServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return problem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['problemStatus'])) {
            $model->problemStatus = $map['problemStatus'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['discoverTime'])) {
            $model->discoverTime = $map['discoverTime'];
        }
        if (isset($map['recoveryTime'])) {
            $model->recoveryTime = $map['recoveryTime'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['progressSummary'])) {
            $model->progressSummary = $map['progressSummary'];
        }
        if (isset($map['preliminaryReason'])) {
            $model->preliminaryReason = $map['preliminaryReason'];
        }
        if (isset($map['mainHandlerName'])) {
            $model->mainHandlerName = $map['mainHandlerName'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['isManual'])) {
            $model->isManual = $map['isManual'];
        }
        if (isset($map['isUpgrade'])) {
            $model->isUpgrade = $map['isUpgrade'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['coordinationGroups'])) {
            if (!empty($map['coordinationGroups'])) {
                $model->coordinationGroups = [];
                $n                         = 0;
                foreach ($map['coordinationGroups'] as $item) {
                    $model->coordinationGroups[$n++] = null !== $item ? coordinationGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['effectionServices'])) {
            if (!empty($map['effectionServices'])) {
                $model->effectionServices = [];
                $n                        = 0;
                foreach ($map['effectionServices'] as $item) {
                    $model->effectionServices[$n++] = null !== $item ? effectionServices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
