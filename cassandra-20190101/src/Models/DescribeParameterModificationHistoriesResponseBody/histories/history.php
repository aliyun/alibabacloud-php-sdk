<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeParameterModificationHistoriesResponseBody\histories;

use AlibabaCloud\Tea\Model;

class history extends Model
{
    /**
     * @example cas_contention_timeout_in_ms
     *
     * @var string
     */
    public $name;

    /**
     * @example 2000
     *
     * @var string
     */
    public $newValue;

    /**
     * @example 1000
     *
     * @var string
     */
    public $oldValue;

    /**
     * @example 1576758805000
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'name'     => 'Name',
        'newValue' => 'NewValue',
        'oldValue' => 'OldValue',
        'time'     => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return history
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
