<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetHealthMonitorLogsResponseBody\logInfo\checkList;
use AlibabaCloud\Tea\Model;

class logInfo extends Model
{
    /**
     * @var int
     */
    public $time;

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
    public $healthId;

    /**
     * @var checkList[]
     */
    public $checkList;

    /**
     * @var string
     */
    public $sceneDescription;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'time'             => 'Time',
        'itemDescription'  => 'ItemDescription',
        'itemName'         => 'ItemName',
        'healthId'         => 'HealthId',
        'checkList'        => 'CheckList',
        'sceneDescription' => 'SceneDescription',
        'hostName'         => 'HostName',
        'sceneName'        => 'SceneName',
        'instanceId'       => 'InstanceId',
        'level'            => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->itemDescription) {
            $res['ItemDescription'] = $this->itemDescription;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->healthId) {
            $res['HealthId'] = $this->healthId;
        }
        if (null !== $this->checkList) {
            $res['CheckList'] = [];
            if (null !== $this->checkList && \is_array($this->checkList)) {
                $n = 0;
                foreach ($this->checkList as $item) {
                    $res['CheckList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneDescription) {
            $res['SceneDescription'] = $this->sceneDescription;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['ItemDescription'])) {
            $model->itemDescription = $map['ItemDescription'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['HealthId'])) {
            $model->healthId = $map['HealthId'];
        }
        if (isset($map['CheckList'])) {
            if (!empty($map['CheckList'])) {
                $model->checkList = [];
                $n                = 0;
                foreach ($map['CheckList'] as $item) {
                    $model->checkList[$n++] = null !== $item ? checkList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SceneDescription'])) {
            $model->sceneDescription = $map['SceneDescription'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
