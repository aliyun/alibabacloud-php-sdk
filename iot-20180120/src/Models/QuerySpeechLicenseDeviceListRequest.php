<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class QuerySpeechLicenseDeviceListRequest extends Model
{
    /**
     * @var string
     */
    public $checkGroupId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string[]
     */
    public $licenseStatusList;

    /**
     * @var int
     */
    public $pageId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'checkGroupId' => 'CheckGroupId',
        'deviceName' => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'licenseStatusList' => 'LicenseStatusList',
        'pageId' => 'PageId',
        'pageSize' => 'PageSize',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
        if (\is_array($this->licenseStatusList)) {
            Model::validateArray($this->licenseStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkGroupId) {
            $res['CheckGroupId'] = $this->checkGroupId;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->licenseStatusList) {
            if (\is_array($this->licenseStatusList)) {
                $res['LicenseStatusList'] = [];
                $n1 = 0;
                foreach ($this->licenseStatusList as $item1) {
                    $res['LicenseStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
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
        if (isset($map['CheckGroupId'])) {
            $model->checkGroupId = $map['CheckGroupId'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['LicenseStatusList'])) {
            if (!empty($map['LicenseStatusList'])) {
                $model->licenseStatusList = [];
                $n1 = 0;
                foreach ($map['LicenseStatusList'] as $item1) {
                    $model->licenseStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
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
