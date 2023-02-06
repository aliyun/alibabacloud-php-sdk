<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\diskEventSet\diskEventType;

use AlibabaCloud\Tea\Model;

class eventType extends Model
{
    /**
     * @description The code of the event type.
     *
     * @example 7
     *
     * @var int
     */
    public $code;

    /**
     * @description The name of the event type. Valid values:
     *
     *   Degraded: The performance of the EBS device was degraded.
     *   SeverelyDegraded: The performance of the EBS device was severely degraded.
     *   Stalled: The performance of the EBS device was severely affected.
     *   ErrorDetected: The local disk was damaged.
     *
     * @example Stalled
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
     * @return eventType
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
