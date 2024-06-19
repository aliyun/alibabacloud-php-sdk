<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\conditions;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\podIps;
use AlibabaCloud\Tea\Model;

class podStatus extends Model
{
    /**
     * @description The conditions of the container group.
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description The statuses about the containers.
     *
     * @var containerStatuses[]
     */
    public $containerStatuses;

    /**
     * @description The IP address of the host.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostIp;

    /**
     * @description The lifecycle phase of the container group.
     *
     * @example Running
     *
     * @var string
     */
    public $phase;

    /**
     * @description The IP address of the container group.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $podIp;

    /**
     * @description The IP addresses of the container groups.
     *
     * @var podIps[]
     */
    public $podIps;

    /**
     * @description The quality of service (QoS) of the container group.
     *
     * @example Guaranteed
     *
     * @var string
     */
    public $qosClass;

    /**
     * @description The time when the container started to run.
     *
     * @example 2021-05-12T07:02:47Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'conditions'        => 'Conditions',
        'containerStatuses' => 'ContainerStatuses',
        'hostIp'            => 'HostIp',
        'phase'             => 'Phase',
        'podIp'             => 'PodIp',
        'podIps'            => 'PodIps',
        'qosClass'          => 'QosClass',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->containerStatuses) {
            $res['ContainerStatuses'] = [];
            if (null !== $this->containerStatuses && \is_array($this->containerStatuses)) {
                $n = 0;
                foreach ($this->containerStatuses as $item) {
                    $res['ContainerStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->podIp) {
            $res['PodIp'] = $this->podIp;
        }
        if (null !== $this->podIps) {
            $res['PodIps'] = [];
            if (null !== $this->podIps && \is_array($this->podIps)) {
                $n = 0;
                foreach ($this->podIps as $item) {
                    $res['PodIps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qosClass) {
            $res['QosClass'] = $this->qosClass;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return podStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContainerStatuses'])) {
            if (!empty($map['ContainerStatuses'])) {
                $model->containerStatuses = [];
                $n                        = 0;
                foreach ($map['ContainerStatuses'] as $item) {
                    $model->containerStatuses[$n++] = null !== $item ? containerStatuses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['PodIp'])) {
            $model->podIp = $map['PodIp'];
        }
        if (isset($map['PodIps'])) {
            if (!empty($map['PodIps'])) {
                $model->podIps = [];
                $n             = 0;
                foreach ($map['PodIps'] as $item) {
                    $model->podIps[$n++] = null !== $item ? podIps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QosClass'])) {
            $model->qosClass = $map['QosClass'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
