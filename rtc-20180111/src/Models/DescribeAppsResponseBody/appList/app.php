<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList\app\serviceAreas;

class app extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var serviceAreas
     */
    public $serviceAreas;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'billType' => 'BillType',
        'createTime' => 'CreateTime',
        'serviceAreas' => 'ServiceAreas',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->serviceAreas) {
            $this->serviceAreas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->serviceAreas) {
            $res['ServiceAreas'] = null !== $this->serviceAreas ? $this->serviceAreas->toArray($noStream) : $this->serviceAreas;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ServiceAreas'])) {
            $model->serviceAreas = serviceAreas::fromMap($map['ServiceAreas']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
