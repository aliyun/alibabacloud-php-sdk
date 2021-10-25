<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsResponseBody\profilings;

use AlibabaCloud\Tea\Model;

class profilingInfo extends Model
{
    /**
     * @var string
     */
    public $profilingId;

    /**
     * @var string
     */
    public $triggerTime;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $freq;
    protected $_name = [
        'profilingId' => 'ProfilingId',
        'triggerTime' => 'TriggerTime',
        'pid'         => 'Pid',
        'hostName'    => 'HostName',
        'duration'    => 'Duration',
        'instanceId'  => 'InstanceId',
        'freq'        => 'Freq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->profilingId) {
            $res['ProfilingId'] = $this->profilingId;
        }
        if (null !== $this->triggerTime) {
            $res['TriggerTime'] = $this->triggerTime;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return profilingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProfilingId'])) {
            $model->profilingId = $map['ProfilingId'];
        }
        if (isset($map['TriggerTime'])) {
            $model->triggerTime = $map['TriggerTime'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }

        return $model;
    }
}
