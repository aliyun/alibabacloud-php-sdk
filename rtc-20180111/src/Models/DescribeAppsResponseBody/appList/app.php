<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList\app\serviceAreas;
use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @example rgf1****"
     *
     * @var string
     */
    public $appId;

    /**
     * @example Default AppName
     *
     * @var string
     */
    public $appName;

    /**
     * @example universal
     *
     * @var string
     */
    public $appType;

    /**
     * @example paybyduration
     *
     * @var string
     */
    public $billType;

    /**
     * @example 2020-01-09T02:02:29Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var serviceAreas
     */
    public $serviceAreas;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'        => 'AppId',
        'appName'      => 'AppName',
        'appType'      => 'AppType',
        'billType'     => 'BillType',
        'createTime'   => 'CreateTime',
        'serviceAreas' => 'ServiceAreas',
        'status'       => 'Status',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ServiceAreas'] = null !== $this->serviceAreas ? $this->serviceAreas->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return app
     */
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
