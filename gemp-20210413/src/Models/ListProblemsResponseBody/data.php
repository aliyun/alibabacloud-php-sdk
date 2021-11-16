<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemsResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemsResponseBody\data\affectServices;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var affectServices[]
     */
    public $affectServices;

    /**
     * @description 取消时间
     *
     * @var string
     */
    public $cancelTime;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 发现时间
     *
     * @var string
     */
    public $discoverTime;

    /**
     * @description 完结时间
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description 事件ID
     *
     * @var int
     */
    public $incidentId;

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
     * @description 主要处理人ID
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @description 主要处理人名称
     *
     * @var string
     */
    public $mainHandlerName;

    /**
     * @description 故障id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 故障等级 1=P1 2=P2 3=P3 4=P4
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @description 故障名称
     *
     * @var string
     */
    public $problemName;

    /**
     * @description 故障编号
     *
     * @var string
     */
    public $problemNumber;

    /**
     * @description 故障状态  HANDLING    处理中 RECOVERED  已恢复  REPLAYING   复盘中  REPLAYED     已复盘 CANCEL        已取消
     *
     * @var string
     */
    public $problemStatus;

    /**
     * @description 恢复时间
     *
     * @var string
     */
    public $recoveryTime;

    /**
     * @description 关联服务ID
     *
     * @var string
     */
    public $relatedServiceId;

    /**
     * @description 复盘时间
     *
     * @var string
     */
    public $replayTime;

    /**
     * @description 关联服务名称
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'affectServices'   => 'affectServices',
        'cancelTime'       => 'cancelTime',
        'createTime'       => 'createTime',
        'discoverTime'     => 'discoverTime',
        'finishTime'       => 'finishTime',
        'incidentId'       => 'incidentId',
        'isManual'         => 'isManual',
        'isUpgrade'        => 'isUpgrade',
        'mainHandlerId'    => 'mainHandlerId',
        'mainHandlerName'  => 'mainHandlerName',
        'problemId'        => 'problemId',
        'problemLevel'     => 'problemLevel',
        'problemName'      => 'problemName',
        'problemNumber'    => 'problemNumber',
        'problemStatus'    => 'problemStatus',
        'recoveryTime'     => 'recoveryTime',
        'relatedServiceId' => 'relatedServiceId',
        'replayTime'       => 'replayTime',
        'serviceName'      => 'serviceName',
        'updateTime'       => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectServices) {
            $res['affectServices'] = [];
            if (null !== $this->affectServices && \is_array($this->affectServices)) {
                $n = 0;
                foreach ($this->affectServices as $item) {
                    $res['affectServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cancelTime) {
            $res['cancelTime'] = $this->cancelTime;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->discoverTime) {
            $res['discoverTime'] = $this->discoverTime;
        }
        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->isManual) {
            $res['isManual'] = $this->isManual;
        }
        if (null !== $this->isUpgrade) {
            $res['isUpgrade'] = $this->isUpgrade;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->mainHandlerName) {
            $res['mainHandlerName'] = $this->mainHandlerName;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->problemName) {
            $res['problemName'] = $this->problemName;
        }
        if (null !== $this->problemNumber) {
            $res['problemNumber'] = $this->problemNumber;
        }
        if (null !== $this->problemStatus) {
            $res['problemStatus'] = $this->problemStatus;
        }
        if (null !== $this->recoveryTime) {
            $res['recoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->replayTime) {
            $res['replayTime'] = $this->replayTime;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['affectServices'])) {
            if (!empty($map['affectServices'])) {
                $model->affectServices = [];
                $n                     = 0;
                foreach ($map['affectServices'] as $item) {
                    $model->affectServices[$n++] = null !== $item ? affectServices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cancelTime'])) {
            $model->cancelTime = $map['cancelTime'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['discoverTime'])) {
            $model->discoverTime = $map['discoverTime'];
        }
        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['isManual'])) {
            $model->isManual = $map['isManual'];
        }
        if (isset($map['isUpgrade'])) {
            $model->isUpgrade = $map['isUpgrade'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['mainHandlerName'])) {
            $model->mainHandlerName = $map['mainHandlerName'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['problemName'])) {
            $model->problemName = $map['problemName'];
        }
        if (isset($map['problemNumber'])) {
            $model->problemNumber = $map['problemNumber'];
        }
        if (isset($map['problemStatus'])) {
            $model->problemStatus = $map['problemStatus'];
        }
        if (isset($map['recoveryTime'])) {
            $model->recoveryTime = $map['recoveryTime'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['replayTime'])) {
            $model->replayTime = $map['replayTime'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
