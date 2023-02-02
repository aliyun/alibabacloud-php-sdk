<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsResponseBody\profilings;

use AlibabaCloud\Tea\Model;

class profilingInfo extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2000
     *
     * @var int
     */
    public $freq;

    /**
     * @example compute5
     *
     * @var string
     */
    public $hostName;

    /**
     * @example i-bp1j76z8dlukzqgl0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 21687
     *
     * @var int
     */
    public $pid;

    /**
     * @example ehpc-hz-i-bplukzqgl****_21687_2019-09-09-02-37-40
     *
     * @var string
     */
    public $profilingId;

    /**
     * @example 2019-09-09 02:37:40
     *
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
