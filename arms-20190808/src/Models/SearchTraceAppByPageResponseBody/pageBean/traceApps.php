<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByPageResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class traceApps extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var bool
     */
    public $show;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'type'       => 'Type',
        'appName'    => 'AppName',
        'updateTime' => 'UpdateTime',
        'labels'     => 'Labels',
        'show'       => 'Show',
        'createTime' => 'CreateTime',
        'pid'        => 'Pid',
        'appId'      => 'AppId',
        'userId'     => 'UserId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->show) {
            $res['Show'] = $this->show;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['Show'])) {
            $model->show = $map['Show'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
