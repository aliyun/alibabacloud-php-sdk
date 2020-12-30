<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\devices;

use AlibabaCloud\Tea\Model;

class device extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $haState;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $dpiSignatureDbVersion;

    /**
     * @var string
     */
    public $softwareVersion;

    /**
     * @var int
     */
    public $distributeSkStatus;

    /**
     * @var string
     */
    public $monitorVersion;

    /**
     * @var string
     */
    public $hcState;
    protected $_name = [
        'serialNumber'          => 'SerialNumber',
        'haState'               => 'HaState',
        'secretKey'             => 'SecretKey',
        'dpiSignatureDbVersion' => 'DpiSignatureDbVersion',
        'softwareVersion'       => 'SoftwareVersion',
        'distributeSkStatus'    => 'DistributeSkStatus',
        'monitorVersion'        => 'MonitorVersion',
        'hcState'               => 'HcState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->haState) {
            $res['HaState'] = $this->haState;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->dpiSignatureDbVersion) {
            $res['DpiSignatureDbVersion'] = $this->dpiSignatureDbVersion;
        }
        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }
        if (null !== $this->distributeSkStatus) {
            $res['DistributeSkStatus'] = $this->distributeSkStatus;
        }
        if (null !== $this->monitorVersion) {
            $res['MonitorVersion'] = $this->monitorVersion;
        }
        if (null !== $this->hcState) {
            $res['HcState'] = $this->hcState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return device
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['HaState'])) {
            $model->haState = $map['HaState'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['DpiSignatureDbVersion'])) {
            $model->dpiSignatureDbVersion = $map['DpiSignatureDbVersion'];
        }
        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }
        if (isset($map['DistributeSkStatus'])) {
            $model->distributeSkStatus = $map['DistributeSkStatus'];
        }
        if (isset($map['MonitorVersion'])) {
            $model->monitorVersion = $map['MonitorVersion'];
        }
        if (isset($map['HcState'])) {
            $model->hcState = $map['HcState'];
        }

        return $model;
    }
}
