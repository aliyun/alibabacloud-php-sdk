<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListJobsResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListJobsResponseBody\data\applications\tags;
use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description The number of running instances.
     *
     * @example 0
     *
     * @var int
     */
    public $active;

    /**
     * @description The description of the job template.
     *
     * @example description
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description The ID of the job template.
     *
     * @example f7730764-d88f-4b9a-8d8e-cd8efbfe****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the job template.
     *
     * @example demo-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The time when the job was last completed.
     *
     * @example 1657522839
     *
     * @var int
     */
    public $completionTime;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @description The number of instances that failed to run.
     *
     * @example 0
     *
     * @var int
     */
    public $failed;

    /**
     * @description Indicates whether the latest change order was executed. Valid values:
     *
     *   **0**: The latest change order failed to be executed.
     *   **1**: The latest change order was executed.
     *
     * @example 1
     *
     * @var string
     */
    public $lastChangeorderState;

    /**
     * @description The running status of the latest job. Valid values:
     *
     *   **0**: The job is not executed.
     *   **1**: The job was executed.
     *   **2**: The job failed to be executed.
     *   **3**: The job is being executed.
     *
     * @example 0
     *
     * @var string
     */
    public $lastJobState;

    /**
     * @description The time when the job was last started.
     *
     * @example 1657522800
     *
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
     * @description The namespace ID.
     *
     * @example cn-beijing:demo
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of instances that were successfully run.
     *
     * @example 3
     *
     * @var int
     */
    public $succeeded;

    /**
     * @description Indicates whether the job template is suspended.
     *
     * @example false
     *
     * @var bool
     */
    public $suspend;

    /**
     * @description The tag of the job template.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @example {"type":"time","config":"0 1 *\/1 * ?","timezone":"GMT+8:00"}
     *
     * @var string
     */
    public $triggerConfig;
    protected $_name = [
        'active'               => 'Active',
        'appDescription'       => 'AppDescription',
        'appId'                => 'AppId',
        'appName'              => 'AppName',
        'completionTime'       => 'CompletionTime',
        'cpu'                  => 'Cpu',
        'failed'               => 'Failed',
        'lastChangeorderState' => 'LastChangeorderState',
        'lastJobState'         => 'LastJobState',
        'lastStartTime'        => 'LastStartTime',
        'mem'                  => 'Mem',
        'message'              => 'Message',
        'namespaceId'          => 'NamespaceId',
        'regionId'             => 'RegionId',
        'succeeded'            => 'Succeeded',
        'suspend'              => 'Suspend',
        'tags'                 => 'Tags',
        'triggerConfig'        => 'TriggerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->triggerConfig) {
            $res['TriggerConfig'] = $this->triggerConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TriggerConfig'])) {
            $model->triggerConfig = $map['TriggerConfig'];
        }

        return $model;
    }
}
