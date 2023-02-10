<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListResponseBody\data\deviceList;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 1690934297000
     *
     * @var int
     */
    public $expiryTime;

    /**
     * @example 1620634297000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 720P
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @example es****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'deviceName'  => 'DeviceName',
        'expiryTime'  => 'ExpiryTime',
        'gmtCreate'   => 'GmtCreate',
        'iotId'       => 'IotId',
        'licenseCode' => 'LicenseCode',
        'productKey'  => 'ProductKey',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
