<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType;

use AlibabaCloud\Tea\Model;

class eventCycleStatus extends Model
{
    /**
     * @description The state code of the system event.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The state name of the system event.
     *
     * @example Executed
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventCycleStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
