<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\conditions;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\podIps;

class podStatus extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var containerStatuses[]
     */
    public $containerStatuses;

    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $podIp;

    /**
     * @var podIps[]
     */
    public $podIps;

    /**
     * @var string
     */
    public $qosClass;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'conditions' => 'Conditions',
        'containerStatuses' => 'ContainerStatuses',
        'hostIp' => 'HostIp',
        'phase' => 'Phase',
        'podIp' => 'PodIp',
        'podIps' => 'PodIps',
        'qosClass' => 'QosClass',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->containerStatuses)) {
            Model::validateArray($this->containerStatuses);
        }
        if (\is_array($this->podIps)) {
            Model::validateArray($this->podIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->containerStatuses) {
            if (\is_array($this->containerStatuses)) {
                $res['ContainerStatuses'] = [];
                $n1 = 0;
                foreach ($this->containerStatuses as $item1) {
                    $res['ContainerStatuses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->podIps)) {
                $res['PodIps'] = [];
                $n1 = 0;
                foreach ($this->podIps as $item1) {
                    $res['PodIps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1++] = conditions::fromMap($item1);
                }
            }
        }

        if (isset($map['ContainerStatuses'])) {
            if (!empty($map['ContainerStatuses'])) {
                $model->containerStatuses = [];
                $n1 = 0;
                foreach ($map['ContainerStatuses'] as $item1) {
                    $model->containerStatuses[$n1++] = containerStatuses::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['PodIps'] as $item1) {
                    $model->podIps[$n1++] = podIps::fromMap($item1);
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
