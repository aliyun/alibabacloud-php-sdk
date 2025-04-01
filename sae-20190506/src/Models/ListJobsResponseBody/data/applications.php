<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListJobsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListJobsResponseBody\data\applications\tags;

class applications extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var string
     */
    public $appDescription;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $completionTime;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var string
     */
    public $lastChangeorderState;

    /**
     * @var string
     */
    public $lastJobState;

    /**
     * @var int
     */
    public $lastStartTime;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $succeeded;

    /**
     * @var bool
     */
    public $suspend;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $triggerConfig;
    protected $_name = [
        'active' => 'Active',
        'appDescription' => 'AppDescription',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'completionTime' => 'CompletionTime',
        'cpu' => 'Cpu',
        'failed' => 'Failed',
        'lastChangeorderState' => 'LastChangeorderState',
        'lastJobState' => 'LastJobState',
        'lastStartTime' => 'LastStartTime',
        'mem' => 'Mem',
        'message' => 'Message',
        'namespaceId' => 'NamespaceId',
        'regionId' => 'RegionId',
        'succeeded' => 'Succeeded',
        'suspend' => 'Suspend',
        'tags' => 'Tags',
        'triggerConfig' => 'TriggerConfig',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }

        if (null !== $this->lastChangeorderState) {
            $res['LastChangeorderState'] = $this->lastChangeorderState;
        }

        if (null !== $this->lastJobState) {
            $res['LastJobState'] = $this->lastJobState;
        }

        if (null !== $this->lastStartTime) {
            $res['LastStartTime'] = $this->lastStartTime;
        }

        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }

        if (null !== $this->suspend) {
            $res['Suspend'] = $this->suspend;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = $this->triggerConfig;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }

        if (isset($map['LastChangeorderState'])) {
            $model->lastChangeorderState = $map['LastChangeorderState'];
        }

        if (isset($map['LastJobState'])) {
            $model->lastJobState = $map['LastJobState'];
        }

        if (isset($map['LastStartTime'])) {
            $model->lastStartTime = $map['LastStartTime'];
        }

        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }

        if (isset($map['Suspend'])) {
            $model->suspend = $map['Suspend'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TriggerConfig'])) {
            $model->triggerConfig = $map['TriggerConfig'];
        }

        return $model;
    }
}
