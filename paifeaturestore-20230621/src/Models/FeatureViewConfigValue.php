<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\FeatureViewConfigValue\snapshot;

class FeatureViewConfigValue extends Model
{
    /**
     * @var FeatureViewConfigValuePartitionsValue[]
     */
    public $partitions;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var bool
     */
    public $equal;

    /**
     * @var bool
     */
    public $useMock;

    /**
     * @var snapshot
     */
    public $snapshot;
    protected $_name = [
        'partitions' => 'Partitions',
        'eventTime' => 'EventTime',
        'equal' => 'Equal',
        'useMock' => 'UseMock',
        'snapshot' => 'Snapshot',
    ];

    public function validate()
    {
        if (\is_array($this->partitions)) {
            Model::validateArray($this->partitions);
        }
        if (null !== $this->snapshot) {
            $this->snapshot->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->partitions) {
            if (\is_array($this->partitions)) {
                $res['Partitions'] = [];
                foreach ($this->partitions as $key1 => $value1) {
                    $res['Partitions'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->equal) {
            $res['Equal'] = $this->equal;
        }

        if (null !== $this->useMock) {
            $res['UseMock'] = $this->useMock;
        }

        if (null !== $this->snapshot) {
            $res['Snapshot'] = null !== $this->snapshot ? $this->snapshot->toArray($noStream) : $this->snapshot;
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
        if (isset($map['Partitions'])) {
            if (!empty($map['Partitions'])) {
                $model->partitions = [];
                foreach ($map['Partitions'] as $key1 => $value1) {
                    $model->partitions[$key1] = FeatureViewConfigValuePartitionsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['Equal'])) {
            $model->equal = $map['Equal'];
        }

        if (isset($map['UseMock'])) {
            $model->useMock = $map['UseMock'];
        }

        if (isset($map['Snapshot'])) {
            $model->snapshot = snapshot::fromMap($map['Snapshot']);
        }

        return $model;
    }
}
