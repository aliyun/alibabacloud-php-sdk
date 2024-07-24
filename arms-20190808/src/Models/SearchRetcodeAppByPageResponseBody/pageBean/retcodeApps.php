<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponseBody\pageBean\retcodeApps\tags;
use AlibabaCloud\Tea\Model;

class retcodeApps extends Model
{
    /**
     * @description The ID of the application. The parameter is an auto-increment parameter.
     *
     * @example 16064
     *
     * @var int
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example a3
     *
     * @var string
     */
    public $appName;

    /**
     * @description The time when the task was created.
     *
     * @example 1545363321000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The alias of the application.
     *
     * @example c1
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The process identifier (PID) of the application.
     *
     * @example eb4zdose6v@9781be0f44d****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the application. Valid values:
     *
     *   `web`: web application
     *   `weex`: Weex mobile app
     *   `mini_dd`: DingTalk mini program
     *   `mini_alipay`: Alipay mini program
     *   `mini_wx`: WeChat mini program
     *   `mini_common`: mini program on other platforms
     *
     * @example web
     *
     * @var string
     */
    public $retcodeAppType;

    /**
     * @description The tag.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the monitoring task. Valid values:
     *
     *   `TRACE`: Application Monitoring
     *   `RETCODE`: Browser Monitoring
     *
     * @example RETCODE
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the task was updated.
     *
     * @example 1545363321000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The user ID.
     *
     * @example 12341234
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'createTime'      => 'CreateTime',
        'nickName'        => 'NickName',
        'pid'             => 'Pid',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'retcodeAppType'  => 'RetcodeAppType',
        'tags'            => 'Tags',
        'type'            => 'Type',
        'updateTime'      => 'UpdateTime',
        'userId'          => 'UserId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retcodeAppType) {
            $res['RetcodeAppType'] = $this->retcodeAppType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetcodeAppType'])) {
            $model->retcodeAppType = $map['RetcodeAppType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
