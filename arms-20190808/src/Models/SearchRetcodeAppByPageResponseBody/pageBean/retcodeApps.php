<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class retcodeApps extends Model
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
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $pid;

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
        'createTime' => 'CreateTime',
        'appId'      => 'AppId',
        'pid'        => 'Pid',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
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
     * @return retcodeApps
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
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
