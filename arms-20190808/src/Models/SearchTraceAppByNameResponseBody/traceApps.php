<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameResponseBody\traceApps\tags;
use AlibabaCloud\Tea\Model;

class traceApps extends Model
{
    /**
     * @description The application ID.
     *
     * @example 123
     *
     * @var int
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The timestamp generated when the task was created.
     *
     * @example 1593486786000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The aliases of the application.
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description The process identifier (PID) of the application.
     *
     * @example a5f9bdeb-2627-4dbe-9247-****
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
     * @description Indicates whether the application is displayed in the Application Real-Time Monitoring Service (ARMS) console. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example true
     *
     * @var bool
     */
    public $show;

    /**
     * @description A list of tags.
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
     * @example TRACE
     *
     * @var string
     */
    public $type;

    /**
     * @description The timestamp generated when the task information was updated.
     *
     * @example 1593486786000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The user ID.
     *
     * @example 113197164949****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'createTime' => 'CreateTime',
        'labels' => 'Labels',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'show' => 'Show',
        'tags' => 'Tags',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
    ];

    public function validate() {}

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
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
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
        if (null !== $this->show) {
            $res['Show'] = $this->show;
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
     * @return traceApps
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
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
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
        if (isset($map['Show'])) {
            $model->show = $map['Show'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
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
