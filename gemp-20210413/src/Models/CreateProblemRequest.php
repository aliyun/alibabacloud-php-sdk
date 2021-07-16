<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateProblemRequest extends Model
{
    /**
     * @description 故障名称
     *
     * @var string
     */
    public $problemName;

    /**
     * @description 幂等校验Id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 故障状态  HANDLING 处理中 RECOVERED 已恢复  REPLAYING 复盘中  REPLAYED 已复盘 CANCEL 已取消
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
     * @description 进展摘要
     *
     * @var string
     */
    public $progressSummary;

    /**
     * @description 所属服务
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 主要处理人
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @description 初步原因
     *
     * @var string
     */
    public $preliminaryReason;

    /**
     * @description 发现时间 (XXXX-XX-XX 00:00:00)
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
     * @description 影响服务列表
     *
     * @var int[]
     */
    public $affectServiceIds;

    /**
     * @description 应急协同组
     *
     * @var int[]
     */
    public $serviceGroupIds;

    /**
     * @description 事件id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 通告类型
     *
     * @var string
     */
    public $problemNotifyType;
    protected $_name = [
        'problemName'       => 'problemName',
        'clientToken'       => 'clientToken',
        'problemStatus'     => 'problemStatus',
        'problemLevel'      => 'problemLevel',
        'progressSummary'   => 'progressSummary',
        'relatedServiceId'  => 'relatedServiceId',
        'mainHandlerId'     => 'mainHandlerId',
        'preliminaryReason' => 'preliminaryReason',
        'discoverTime'      => 'discoverTime',
        'recoveryTime'      => 'recoveryTime',
        'affectServiceIds'  => 'affectServiceIds',
        'serviceGroupIds'   => 'serviceGroupIds',
        'incidentId'        => 'incidentId',
        'problemNotifyType' => 'problemNotifyType',
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
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->problemStatus) {
            $res['problemStatus'] = $this->problemStatus;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->progressSummary) {
            $res['progressSummary'] = $this->progressSummary;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->preliminaryReason) {
            $res['preliminaryReason'] = $this->preliminaryReason;
        }
        if (null !== $this->discoverTime) {
            $res['discoverTime'] = $this->discoverTime;
        }
        if (null !== $this->recoveryTime) {
            $res['recoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->affectServiceIds) {
            $res['affectServiceIds'] = $this->affectServiceIds;
        }
        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProblemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['problemStatus'])) {
            $model->problemStatus = $map['problemStatus'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['progressSummary'])) {
            $model->progressSummary = $map['progressSummary'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['preliminaryReason'])) {
            $model->preliminaryReason = $map['preliminaryReason'];
        }
        if (isset($map['discoverTime'])) {
            $model->discoverTime = $map['discoverTime'];
        }
        if (isset($map['recoveryTime'])) {
            $model->recoveryTime = $map['recoveryTime'];
        }
        if (isset($map['affectServiceIds'])) {
            if (!empty($map['affectServiceIds'])) {
                $model->affectServiceIds = $map['affectServiceIds'];
            }
        }
        if (isset($map['serviceGroupIds'])) {
            if (!empty($map['serviceGroupIds'])) {
                $model->serviceGroupIds = $map['serviceGroupIds'];
            }
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
        }

        return $model;
    }
}
