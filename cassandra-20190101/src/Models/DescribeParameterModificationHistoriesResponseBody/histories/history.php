<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeParameterModificationHistoriesResponseBody\histories;

use AlibabaCloud\Tea\Model;

class history extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $oldValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newValue;
    protected $_name = [
        'time'     => 'Time',
        'oldValue' => 'OldValue',
        'name'     => 'Name',
        'newValue' => 'NewValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
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
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }

        return $model;
    }
}
