<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class GetCardResponseBody extends Model
{
    /**
     * @var string
     */
    public $APN;

    /**
     * @var string
     */
    public $activatedTime;

    /**
     * @var int
     */
    public $alarmThreshold;

    /**
     * @var string
     */
    public $cloudConnectorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     */
    public $imsi;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var int
     */
    public $limitThreshold;

    /**
     * @var string
     */
    public $lock;

    /**
     * @var string
     */
    public $msisdn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $simStatus;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $stopThreshold;

    /**
     * @var int
     */
    public $usageDataMonth;

    /**
     * @var int
     */
    public $usageDataTotal;

    /**
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
