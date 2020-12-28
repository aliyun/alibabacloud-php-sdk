<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class RunCloudMetricProfilingRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $processId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $freq;
    protected $_name = [
        'regionId'  => 'RegionId',
        'clusterId' => 'ClusterId',
        'hostName'  => 'HostName',
        'processId' => 'ProcessId',
        'duration'  => 'Duration',
        'freq'      => 'Freq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCloudMetricProfilingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }

        return $model;
    }
}
