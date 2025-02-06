<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models;

use AlibabaCloud\Dara\Model;

class QueryAuthenticationRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $deviceName;
    /**
     * @var string
     */
    public $iotId;
    /**
     * @var int
     */
    public $licenseType;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'deviceName'  => 'DeviceName',
        'iotId'       => 'IotId',
        'licenseType' => 'LicenseType',
        'pageSize'    => 'PageSize',
        'productKey'  => 'ProductKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
