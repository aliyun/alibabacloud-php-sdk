<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListProblemsRequest extends Model
{
    /**
     * @description 影响服务ID
     *
     * @var int
     */
    public $affectServiceId;

    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 发现结束时间
     *
     * @var string
     */
    public $discoveryEndTime;

    /**
     * @description 发现开始时间
     *
     * @var string
     */
    public $discoveryStartTime;

    /**
     * @description 主要处理人
     *
     * @var int
     */
    public $mainHandlerId;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 故障等级 1=P1 2=P2 3=P3 4=P4
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @description 故障状态  HANDLING   处理中 RECOVERED 已恢复  REPLAYING   复盘中  REPLAYED     已复盘 CANCEL        已取消
     *
     * @var string
     */
    public $problemStatus;

    /**
     * @description RESPONSIBLE 我负责的       PARTICIPATED 我参与的  ALL 全部
     *
     * @var string
     */
    public $queryType;

    /**
     * @description 复盘负责人
     *
     * @var int
     */
    public $repeaterId;

    /**
     * @description 恢复结束时间
     *
     * @var string
     */
    public $restoreEndTime;

    /**
     * @description 恢复开始时间
     *
     * @var string
     */
    public $restoreStartTime;

    /**
     * @description 应急协同组
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'affectServiceId'    => 'affectServiceId',
        'clientToken'        => 'clientToken',
        'discoveryEndTime'   => 'discoveryEndTime',
        'discoveryStartTime' => 'discoveryStartTime',
        'mainHandlerId'      => 'mainHandlerId',
        'pageNumber'         => 'pageNumber',
        'pageSize'           => 'pageSize',
        'problemLevel'       => 'problemLevel',
        'problemStatus'      => 'problemStatus',
        'queryType'          => 'queryType',
        'repeaterId'         => 'repeaterId',
        'restoreEndTime'     => 'restoreEndTime',
        'restoreStartTime'   => 'restoreStartTime',
        'serviceGroupId'     => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectServiceId) {
            $res['affectServiceId'] = $this->affectServiceId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->discoveryEndTime) {
            $res['discoveryEndTime'] = $this->discoveryEndTime;
        }
        if (null !== $this->discoveryStartTime) {
            $res['discoveryStartTime'] = $this->discoveryStartTime;
        }
        if (null !== $this->mainHandlerId) {
            $res['mainHandlerId'] = $this->mainHandlerId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->problemStatus) {
            $res['problemStatus'] = $this->problemStatus;
        }
        if (null !== $this->queryType) {
            $res['queryType'] = $this->queryType;
        }
        if (null !== $this->repeaterId) {
            $res['repeaterId'] = $this->repeaterId;
        }
        if (null !== $this->restoreEndTime) {
            $res['restoreEndTime'] = $this->restoreEndTime;
        }
        if (null !== $this->restoreStartTime) {
            $res['restoreStartTime'] = $this->restoreStartTime;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProblemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['affectServiceId'])) {
            $model->affectServiceId = $map['affectServiceId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['discoveryEndTime'])) {
            $model->discoveryEndTime = $map['discoveryEndTime'];
        }
        if (isset($map['discoveryStartTime'])) {
            $model->discoveryStartTime = $map['discoveryStartTime'];
        }
        if (isset($map['mainHandlerId'])) {
            $model->mainHandlerId = $map['mainHandlerId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['problemStatus'])) {
            $model->problemStatus = $map['problemStatus'];
        }
        if (isset($map['queryType'])) {
            $model->queryType = $map['queryType'];
        }
        if (isset($map['repeaterId'])) {
            $model->repeaterId = $map['repeaterId'];
        }
        if (isset($map['restoreEndTime'])) {
            $model->restoreEndTime = $map['restoreEndTime'];
        }
        if (isset($map['restoreStartTime'])) {
            $model->restoreStartTime = $map['restoreStartTime'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
