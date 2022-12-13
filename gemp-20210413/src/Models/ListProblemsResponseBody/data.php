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
     * @example 2020-09-08 15:59:59
     *
     * @var string
     */
    public $cancelTime;

    /**
     * @example 2020-09-08 15:59:59
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-09-08 15:59:59
     *
     * @var string
     */
    public $discoverTime;

    /**
     * @example 2020-09-08 15:59:59
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example 10000
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isManual;

    /**
     * @example true
     *
     * @var bool
     */
    public $isUpgrade;

    /**
     * @example 100
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @var int
     */
    public $mainHandlerIsValid;

    /**
     * @example 王宇
     *
     * @var string
     */
    public $mainHandlerName;

    /**
     * @example 1
     *
     * @var int
     */
    public $problemId;

    /**
     * @example P1
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @example 故障
     *
     * @var string
     */
    public $problemName;

    /**
     * @example P34438300000001116258132229577472
     *
     * @var string
     */
    public $problemNumber;

    /**
     * @example HANDLING
     *
     * @var string
     */
    public $problemStatus;

    /**
     * @example 2020-09-08 15:59:59
     *
     * @var string
     */
    public $recoveryTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $relatedServiceId;

    /**
     * @example 2020-09-08 15:59:59
     *
     * @var string
     */
    public $replayTime;

    /**
     * @var int
     */
    public $serviceDeletedType;

    /**
     * @example 服务1
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 2020-09-08 15:59:59
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'affectServices'     => 'affectServices',
        'cancelTime'         => 'cancelTime',
        'createTime'         => 'createTime',
        'discoverTime'       => 'discoverTime',
        'finishTime'         => 'finishTime',
        'incidentId'         => 'incidentId',
        'isManual'           => 'isManual',
        'isUpgrade'          => 'isUpgrade',
        'mainHandlerId'      => 'mainHandlerId',
        'mainHandlerIsValid' => 'mainHandlerIsValid',
        'mainHandlerName'    => 'mainHandlerName',
        'problemId'          => 'problemId',
        'problemLevel'       => 'problemLevel',
        'problemName'        => 'problemName',
        'problemNumber'      => 'problemNumber',
        'problemStatus'      => 'problemStatus',
        'recoveryTime'       => 'recoveryTime',
        'relatedServiceId'   => 'relatedServiceId',
        'replayTime'         => 'replayTime',
        'serviceDeletedType' => 'serviceDeletedType',
        'serviceName'        => 'serviceName',
        'updateTime'         => 'updateTime',
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
        if (null !== $this->mainHandlerIsValid) {
            $res['mainHandlerIsValid'] = $this->mainHandlerIsValid;
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
        if (null !== $this->serviceDeletedType) {
            $res['serviceDeletedType'] = $this->serviceDeletedType;
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
        if (isset($map['mainHandlerIsValid'])) {
            $model->mainHandlerIsValid = $map['mainHandlerIsValid'];
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
        if (isset($map['serviceDeletedType'])) {
            $model->serviceDeletedType = $map['serviceDeletedType'];
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
