<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList\app\serviceAreas;
use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var serviceAreas
     */
    public $serviceAreas;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var string
     */
    public $appType;
    protected $_name = [
        'status'       => 'Status',
        'appName'      => 'AppName',
        'serviceAreas' => 'ServiceAreas',
        'appId'        => 'AppId',
        'createTime'   => 'CreateTime',
        'billType'     => 'BillType',
        'appType'      => 'AppType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->serviceAreas) {
            $res['ServiceAreas'] = null !== $this->serviceAreas ? $this->serviceAreas->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ServiceAreas'])) {
            $model->serviceAreas = serviceAreas::fromMap($map['ServiceAreas']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        return $model;
    }
}
