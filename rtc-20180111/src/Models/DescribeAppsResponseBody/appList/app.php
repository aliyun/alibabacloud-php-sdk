<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList\app\serviceAreas;
use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'appId'        => 'AppId',
        'appName'      => 'AppName',
        'appType'      => 'AppType',
        'billType'     => 'BillType',
        'createTime'   => 'CreateTime',
        'serviceAreas' => 'ServiceAreas',
        'status'       => 'Status',
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

        return $model;
    }
}
