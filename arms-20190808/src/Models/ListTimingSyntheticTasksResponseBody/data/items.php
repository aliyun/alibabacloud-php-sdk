<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksResponseBody\data\items\commonSetting;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksResponseBody\data\items\tags;

class items extends Model
{
    /**
     * @var commonSetting
     */
    public $commonSetting;
    /**
     * @var string
     */
    public $frequency;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $monitorCategory;
    /**
     * @var string
     */
    public $monitorNum;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var int
     */
    public $taskType;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'commonSetting'   => 'CommonSetting',
        'frequency'       => 'Frequency',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'monitorCategory' => 'MonitorCategory',
        'monitorNum'      => 'MonitorNum',
        'name'            => 'Name',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'taskId'          => 'TaskId',
        'taskType'        => 'TaskType',
        'url'             => 'Url',
    ];

    public function validate()
    {
        if (null !== $this->commonSetting) {
            $this->commonSetting->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonSetting) {
            $res['CommonSetting'] = null !== $this->commonSetting ? $this->commonSetting->toArray($noStream) : $this->commonSetting;
        }

        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->monitorCategory) {
            $res['MonitorCategory'] = $this->monitorCategory;
        }

        if (null !== $this->monitorNum) {
            $res['MonitorNum'] = $this->monitorNum;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CommonSetting'])) {
            $model->commonSetting = commonSetting::fromMap($map['CommonSetting']);
        }

        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['MonitorCategory'])) {
            $model->monitorCategory = $map['MonitorCategory'];
        }

        if (isset($map['MonitorNum'])) {
            $model->monitorNum = $map['MonitorNum'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
