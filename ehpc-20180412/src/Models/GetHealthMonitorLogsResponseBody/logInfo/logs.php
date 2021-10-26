<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo\logs\checkList;
use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @var checkList
     */
    public $checkList;

    /**
     * @var string
     */
    public $healthId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $itemDescription;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $sceneDescription;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'checkList'        => 'CheckList',
        'healthId'         => 'HealthId',
        'hostName'         => 'HostName',
        'instanceId'       => 'InstanceId',
        'itemDescription'  => 'ItemDescription',
        'itemName'         => 'ItemName',
        'level'            => 'Level',
        'sceneDescription' => 'SceneDescription',
        'sceneName'        => 'SceneName',
        'time'             => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkList) {
            $res['CheckList'] = null !== $this->checkList ? $this->checkList->toMap() : null;
        }
        if (null !== $this->healthId) {
            $res['HealthId'] = $this->healthId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemDescription) {
            $res['ItemDescription'] = $this->itemDescription;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->sceneDescription) {
            $res['SceneDescription'] = $this->sceneDescription;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckList'])) {
            $model->checkList = checkList::fromMap($map['CheckList']);
        }
        if (isset($map['HealthId'])) {
            $model->healthId = $map['HealthId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemDescription'])) {
            $model->itemDescription = $map['ItemDescription'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['SceneDescription'])) {
            $model->sceneDescription = $map['SceneDescription'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
