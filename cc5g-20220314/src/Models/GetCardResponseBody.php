<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class GetCardResponseBody extends Model
{
    /**
     * @example zjalyjs01s.5gjs.njiot
     *
     * @var string
     */
    public $APN;

    /**
     * @example 2022-08-25 17:34:57
     *
     * @var string
     */
    public $activatedTime;

    /**
     * @example 1000
     *
     * @var int
     */
    public $alarmThreshold;

    /**
     * @example iotcc-xxxxxxxx
     *
     * @var string
     */
    public $cloudConnectorId;

    /**
     * @example task-test
     *
     * @var string
     */
    public $description;

    /**
     * @example Unicom
     *
     * @var string
     */
    public $ISP;

    /**
     * @example 111111111
     *
     * @var string
     */
    public $iccid;

    /**
     * @example 23412313513512
     *
     * @var string
     */
    public $imei;

    /**
     * @example 12123123
     *
     * @var string
     */
    public $imsi;

    /**
     * @example 172.24.2.121
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example 50
     *
     * @var int
     */
    public $limitThreshold;

    /**
     * @example true
     *
     * @var string
     */
    public $lock;

    /**
     * @example 2312341231235
     *
     * @var string
     */
    public $msisdn;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 5G
     *
     * @var string
     */
    public $netType;

    /**
     * @example 12312341234124
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 0B28B72A-BD16-51F7-AAEE-55247FE02729
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Deactivated
     *
     * @var string
     */
    public $simStatus;

    /**
     * @example CONSUMER_THREE_IN_ONE
     *
     * @var string
     */
    public $spec;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example 4096
     *
     * @var int
     */
    public $stopThreshold;

    /**
     * @example 50
     *
     * @var int
     */
    public $usageDataMonth;

    /**
     * @example 1000
     *
     * @var int
     */
    public $usageDataTotal;

    /**
     * @example cc5g-xxxxxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'APN'                      => 'APN',
        'activatedTime'            => 'ActivatedTime',
        'alarmThreshold'           => 'AlarmThreshold',
        'cloudConnectorId'         => 'CloudConnectorId',
        'description'              => 'Description',
        'ISP'                      => 'ISP',
        'iccid'                    => 'Iccid',
        'imei'                     => 'Imei',
        'imsi'                     => 'Imsi',
        'ipAddress'                => 'IpAddress',
        'limitThreshold'           => 'LimitThreshold',
        'lock'                     => 'Lock',
        'msisdn'                   => 'Msisdn',
        'name'                     => 'Name',
        'netType'                  => 'NetType',
        'orderId'                  => 'OrderId',
        'requestId'                => 'RequestId',
        'simStatus'                => 'SimStatus',
        'spec'                     => 'Spec',
        'status'                   => 'Status',
        'stopThreshold'            => 'StopThreshold',
        'usageDataMonth'           => 'UsageDataMonth',
        'usageDataTotal'           => 'UsageDataTotal',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APN) {
            $res['APN'] = $this->APN;
        }
        if (null !== $this->activatedTime) {
            $res['ActivatedTime'] = $this->activatedTime;
        }
        if (null !== $this->alarmThreshold) {
            $res['AlarmThreshold'] = $this->alarmThreshold;
        }
        if (null !== $this->cloudConnectorId) {
            $res['CloudConnectorId'] = $this->cloudConnectorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->imei) {
            $res['Imei'] = $this->imei;
        }
        if (null !== $this->imsi) {
            $res['Imsi'] = $this->imsi;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->limitThreshold) {
            $res['LimitThreshold'] = $this->limitThreshold;
        }
        if (null !== $this->lock) {
            $res['Lock'] = $this->lock;
        }
        if (null !== $this->msisdn) {
            $res['Msisdn'] = $this->msisdn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->simStatus) {
            $res['SimStatus'] = $this->simStatus;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopThreshold) {
            $res['StopThreshold'] = $this->stopThreshold;
        }
        if (null !== $this->usageDataMonth) {
            $res['UsageDataMonth'] = $this->usageDataMonth;
        }
        if (null !== $this->usageDataTotal) {
            $res['UsageDataTotal'] = $this->usageDataTotal;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APN'])) {
            $model->APN = $map['APN'];
        }
        if (isset($map['ActivatedTime'])) {
            $model->activatedTime = $map['ActivatedTime'];
        }
        if (isset($map['AlarmThreshold'])) {
            $model->alarmThreshold = $map['AlarmThreshold'];
        }
        if (isset($map['CloudConnectorId'])) {
            $model->cloudConnectorId = $map['CloudConnectorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Imei'])) {
            $model->imei = $map['Imei'];
        }
        if (isset($map['Imsi'])) {
            $model->imsi = $map['Imsi'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['LimitThreshold'])) {
            $model->limitThreshold = $map['LimitThreshold'];
        }
        if (isset($map['Lock'])) {
            $model->lock = $map['Lock'];
        }
        if (isset($map['Msisdn'])) {
            $model->msisdn = $map['Msisdn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SimStatus'])) {
            $model->simStatus = $map['SimStatus'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopThreshold'])) {
            $model->stopThreshold = $map['StopThreshold'];
        }
        if (isset($map['UsageDataMonth'])) {
            $model->usageDataMonth = $map['UsageDataMonth'];
        }
        if (isset($map['UsageDataTotal'])) {
            $model->usageDataTotal = $map['UsageDataTotal'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
