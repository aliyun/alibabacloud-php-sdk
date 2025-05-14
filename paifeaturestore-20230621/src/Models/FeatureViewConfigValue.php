<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'partitions' => 'Partitions',
        'eventTime' => 'EventTime',
        'equal' => 'Equal',
        'useMock' => 'UseMock',
    ];

    public function validate()
    {
        if (\is_array($this->partitions)) {
            Model::validateArray($this->partitions);
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

        return $model;
    }
}
