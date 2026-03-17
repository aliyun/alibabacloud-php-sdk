<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\devices;

use AlibabaCloud\Dara\Model;

class device extends Model
{
    /**
     * @var int
     */
    public $distributeSkStatus;

    /**
     * @var string
     */
    public $dpiSignatureDbVersion;

    /**
     * @var string
     */
    public $haState;

    /**
     * @var string
     */
    public $hcState;

    /**
     * @var string
     */
    public $monitorVersion;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $softwareVersion;
    protected $_name = [
        'distributeSkStatus' => 'DistributeSkStatus',
        'dpiSignatureDbVersion' => 'DpiSignatureDbVersion',
        'haState' => 'HaState',
        'hcState' => 'HcState',
        'monitorVersion' => 'MonitorVersion',
        'secretKey' => 'SecretKey',
        'serialNumber' => 'SerialNumber',
        'softwareVersion' => 'SoftwareVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributeSkStatus) {
            $res['DistributeSkStatus'] = $this->distributeSkStatus;
        }

        if (null !== $this->dpiSignatureDbVersion) {
            $res['DpiSignatureDbVersion'] = $this->dpiSignatureDbVersion;
        }

        if (null !== $this->haState) {
            $res['HaState'] = $this->haState;
        }

        if (null !== $this->hcState) {
            $res['HcState'] = $this->hcState;
        }

        if (null !== $this->monitorVersion) {
            $res['MonitorVersion'] = $this->monitorVersion;
        }

        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributeSkStatus'])) {
            $model->distributeSkStatus = $map['DistributeSkStatus'];
        }

        if (isset($map['DpiSignatureDbVersion'])) {
            $model->dpiSignatureDbVersion = $map['DpiSignatureDbVersion'];
        }

        if (isset($map['HaState'])) {
            $model->haState = $map['HaState'];
        }

        if (isset($map['HcState'])) {
            $model->hcState = $map['HcState'];
        }

        if (isset($map['MonitorVersion'])) {
            $model->monitorVersion = $map['MonitorVersion'];
        }

        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }

        return $model;
    }
}
