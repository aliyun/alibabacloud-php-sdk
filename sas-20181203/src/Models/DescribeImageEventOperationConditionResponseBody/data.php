<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationConditionResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationConditionResponseBody\data\operations;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example sensitiveFile
     *
     * @var string
     */
    public $eventType;

    /**
     * @var operations[]
     */
    public $operations;

    /**
     * @var string[]
     */
    public $scenarios;
    protected $_name = [
        'eventType'  => 'EventType',
        'operations' => 'Operations',
        'scenarios'  => 'Scenarios',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->operations) {
            $res['Operations'] = [];
            if (null !== $this->operations && \is_array($this->operations)) {
                $n = 0;
                foreach ($this->operations as $item) {
                    $res['Operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scenarios) {
            $res['Scenarios'] = $this->scenarios;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Operations'])) {
            if (!empty($map['Operations'])) {
                $model->operations = [];
                $n                 = 0;
                foreach ($map['Operations'] as $item) {
                    $model->operations[$n++] = null !== $item ? operations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scenarios'])) {
            if (!empty($map['Scenarios'])) {
                $model->scenarios = $map['Scenarios'];
            }
        }

        return $model;
    }
}
