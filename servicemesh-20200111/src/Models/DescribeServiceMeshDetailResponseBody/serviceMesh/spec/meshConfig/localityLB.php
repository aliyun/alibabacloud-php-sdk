<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Dara\Model;

class localityLB extends Model
{
    /**
     * @var mixed[]
     */
    public $distribute;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var mixed[]
     */
    public $failover;

    /**
     * @var mixed[]
     */
    public $failoverPriority;
    protected $_name = [
        'distribute' => 'Distribute',
        'enabled' => 'Enabled',
        'failover' => 'Failover',
        'failoverPriority' => 'FailoverPriority',
    ];

    public function validate()
    {
        if (\is_array($this->distribute)) {
            Model::validateArray($this->distribute);
        }
        if (\is_array($this->failover)) {
            Model::validateArray($this->failover);
        }
        if (\is_array($this->failoverPriority)) {
            Model::validateArray($this->failoverPriority);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distribute) {
            if (\is_array($this->distribute)) {
                $res['Distribute'] = [];
                foreach ($this->distribute as $key1 => $value1) {
                    $res['Distribute'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->failover) {
            if (\is_array($this->failover)) {
                $res['Failover'] = [];
                foreach ($this->failover as $key1 => $value1) {
                    $res['Failover'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->failoverPriority) {
            if (\is_array($this->failoverPriority)) {
                $res['FailoverPriority'] = [];
                foreach ($this->failoverPriority as $key1 => $value1) {
                    $res['FailoverPriority'][$key1] = $value1;
                }
            }
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
        if (isset($map['Distribute'])) {
            if (!empty($map['Distribute'])) {
                $model->distribute = [];
                foreach ($map['Distribute'] as $key1 => $value1) {
                    $model->distribute[$key1] = $value1;
                }
            }
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Failover'])) {
            if (!empty($map['Failover'])) {
                $model->failover = [];
                foreach ($map['Failover'] as $key1 => $value1) {
                    $model->failover[$key1] = $value1;
                }
            }
        }

        if (isset($map['FailoverPriority'])) {
            if (!empty($map['FailoverPriority'])) {
                $model->failoverPriority = [];
                foreach ($map['FailoverPriority'] as $key1 => $value1) {
                    $model->failoverPriority[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
