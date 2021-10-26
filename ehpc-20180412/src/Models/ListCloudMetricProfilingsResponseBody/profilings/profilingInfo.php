<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsResponseBody\profilings;

use AlibabaCloud\Tea\Model;

class profilingInfo extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $freq;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var string
     */
    public $profilingId;

    /**
     * @var string
     */
    public $triggerTime;
    protected $_name = [
        'duration'    => 'Duration',
        'freq'        => 'Freq',
        'hostName'    => 'HostName',
        'instanceId'  => 'InstanceId',
        'pid'         => 'Pid',
        'profilingId' => 'ProfilingId',
        'triggerTime' => 'TriggerTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->profilingId) {
            $res['ProfilingId'] = $this->profilingId;
        }
        if (null !== $this->triggerTime) {
            $res['TriggerTime'] = $this->triggerTime;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ProfilingId'])) {
            $model->profilingId = $map['ProfilingId'];
        }
        if (isset($map['TriggerTime'])) {
            $model->triggerTime = $map['TriggerTime'];
        }

        return $model;
    }
}
