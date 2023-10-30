<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'partitions' => 'Partitions',
        'eventTime'  => 'EventTime',
        'equal'      => 'Equal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitions) {
            $res['Partitions'] = [];
            if (null !== $this->partitions && \is_array($this->partitions)) {
                foreach ($this->partitions as $key => $val) {
                    $res['Partitions'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->equal) {
            $res['Equal'] = $this->equal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FeatureViewConfigValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Partitions'])) {
            $model->partitions = $map['Partitions'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['Equal'])) {
            $model->equal = $map['Equal'];
        }

        return $model;
    }
}
