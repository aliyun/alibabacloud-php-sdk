<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus\aggregateData;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus\dedicatedLine;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus\monitorItem;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus\notificationSwitch;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus\portCollection;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus\resourceApp;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus\resourceDevice;
use AlibabaCloud\Tea\Model;

class alarmStatus extends Model
{
    /**
     * @example [{"avg_latency":4.51}]
     *
     * @var string
     */
    public $abnormalDataItem;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $agentIp;

    /**
     * @var aggregateData
     */
    public $aggregateData;

    /**
     * @example a-52gmqniln3u53n32
     *
     * @var string
     */
    public $aggregateDataId;

    /**
     * @example {"alarmStatus":"WARNING","expression":">=","variable":"avg-latency","monitorItemId":"m-52gmqniln3u53n32","type":"SINGLE","value":"0"}
     *
     * @var string
     */
    public $alarmRule;

    /**
     * @example WARNING
     *
     * @var string
     */
    public $alarmStatus;

    /**
     * @example app-0ijhb6yujk
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2021-01-01 00:01:00
     *
     * @var string
     */
    public $collectionTime;

    /**
     * @var dedicatedLine
     */
    public $dedicatedLine;

    /**
     * @example d-52gmqniln3u53n32
     *
     * @var string
     */
    public $dedicatedLineId;

    /**
     * @example device-jrjb476ub06
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 2021-01-01 00:01:00
     *
     * @var string
     */
    public $firstAbnormalTime;

    /**
     * @var monitorItem
     */
    public $monitorItem;

    /**
     * @example m-22ut5sn54o35wsz6
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @var notificationSwitch
     */
    public $notificationSwitch;

    /**
     * @var portCollection
     */
    public $portCollection;

    /**
     * @example p-09iuhbv456yj
     *
     * @var string
     */
    public $portCollectionId;

    /**
     * @example 2021-01-01 00:01:00
     *
     * @var string
     */
    public $receiveTime;

    /**
     * @var resourceApp
     */
    public $resourceApp;

    /**
     * @var resourceDevice
     */
    public $resourceDevice;

    /**
     * @example OK
     *
     * @var string
     */
    public $responseCode;

    /**
     * @example {"loss_rate":"0","avg-latency":"4.51"}
     *
     * @var string
     */
    public $result;

    /**
     * @example d-fwq29cmatva28_m-52gmqniln3u53n32
     *
     * @var string
     */
    public $uniqueKey;
    protected $_name = [
        'abnormalDataItem'   => 'AbnormalDataItem',
        'agentIp'            => 'AgentIp',
        'aggregateData'      => 'AggregateData',
        'aggregateDataId'    => 'AggregateDataId',
        'alarmRule'          => 'AlarmRule',
        'alarmStatus'        => 'AlarmStatus',
        'appId'              => 'AppId',
        'collectionTime'     => 'CollectionTime',
        'dedicatedLine'      => 'DedicatedLine',
        'dedicatedLineId'    => 'DedicatedLineId',
        'deviceId'           => 'DeviceId',
        'firstAbnormalTime'  => 'FirstAbnormalTime',
        'monitorItem'        => 'MonitorItem',
        'monitorItemId'      => 'MonitorItemId',
        'notificationSwitch' => 'NotificationSwitch',
        'portCollection'     => 'PortCollection',
        'portCollectionId'   => 'PortCollectionId',
        'receiveTime'        => 'ReceiveTime',
        'resourceApp'        => 'ResourceApp',
        'resourceDevice'     => 'ResourceDevice',
        'responseCode'       => 'ResponseCode',
        'result'             => 'Result',
        'uniqueKey'          => 'UniqueKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalDataItem) {
            $res['AbnormalDataItem'] = $this->abnormalDataItem;
        }
        if (null !== $this->agentIp) {
            $res['AgentIp'] = $this->agentIp;
        }
        if (null !== $this->aggregateData) {
            $res['AggregateData'] = null !== $this->aggregateData ? $this->aggregateData->toMap() : null;
        }
        if (null !== $this->aggregateDataId) {
            $res['AggregateDataId'] = $this->aggregateDataId;
        }
        if (null !== $this->alarmRule) {
            $res['AlarmRule'] = $this->alarmRule;
        }
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->collectionTime) {
            $res['CollectionTime'] = $this->collectionTime;
        }
        if (null !== $this->dedicatedLine) {
            $res['DedicatedLine'] = null !== $this->dedicatedLine ? $this->dedicatedLine->toMap() : null;
        }
        if (null !== $this->dedicatedLineId) {
            $res['DedicatedLineId'] = $this->dedicatedLineId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->firstAbnormalTime) {
            $res['FirstAbnormalTime'] = $this->firstAbnormalTime;
        }
        if (null !== $this->monitorItem) {
            $res['MonitorItem'] = null !== $this->monitorItem ? $this->monitorItem->toMap() : null;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->notificationSwitch) {
            $res['NotificationSwitch'] = null !== $this->notificationSwitch ? $this->notificationSwitch->toMap() : null;
        }
        if (null !== $this->portCollection) {
            $res['PortCollection'] = null !== $this->portCollection ? $this->portCollection->toMap() : null;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->receiveTime) {
            $res['ReceiveTime'] = $this->receiveTime;
        }
        if (null !== $this->resourceApp) {
            $res['ResourceApp'] = null !== $this->resourceApp ? $this->resourceApp->toMap() : null;
        }
        if (null !== $this->resourceDevice) {
            $res['ResourceDevice'] = null !== $this->resourceDevice ? $this->resourceDevice->toMap() : null;
        }
        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->uniqueKey) {
            $res['UniqueKey'] = $this->uniqueKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalDataItem'])) {
            $model->abnormalDataItem = $map['AbnormalDataItem'];
        }
        if (isset($map['AgentIp'])) {
            $model->agentIp = $map['AgentIp'];
        }
        if (isset($map['AggregateData'])) {
            $model->aggregateData = aggregateData::fromMap($map['AggregateData']);
        }
        if (isset($map['AggregateDataId'])) {
            $model->aggregateDataId = $map['AggregateDataId'];
        }
        if (isset($map['AlarmRule'])) {
            $model->alarmRule = $map['AlarmRule'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CollectionTime'])) {
            $model->collectionTime = $map['CollectionTime'];
        }
        if (isset($map['DedicatedLine'])) {
            $model->dedicatedLine = dedicatedLine::fromMap($map['DedicatedLine']);
        }
        if (isset($map['DedicatedLineId'])) {
            $model->dedicatedLineId = $map['DedicatedLineId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['FirstAbnormalTime'])) {
            $model->firstAbnormalTime = $map['FirstAbnormalTime'];
        }
        if (isset($map['MonitorItem'])) {
            $model->monitorItem = monitorItem::fromMap($map['MonitorItem']);
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['NotificationSwitch'])) {
            $model->notificationSwitch = notificationSwitch::fromMap($map['NotificationSwitch']);
        }
        if (isset($map['PortCollection'])) {
            $model->portCollection = portCollection::fromMap($map['PortCollection']);
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['ReceiveTime'])) {
            $model->receiveTime = $map['ReceiveTime'];
        }
        if (isset($map['ResourceApp'])) {
            $model->resourceApp = resourceApp::fromMap($map['ResourceApp']);
        }
        if (isset($map['ResourceDevice'])) {
            $model->resourceDevice = resourceDevice::fromMap($map['ResourceDevice']);
        }
        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['UniqueKey'])) {
            $model->uniqueKey = $map['UniqueKey'];
        }

        return $model;
    }
}
