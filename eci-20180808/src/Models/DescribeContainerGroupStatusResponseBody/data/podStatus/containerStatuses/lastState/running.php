<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState;

use AlibabaCloud\Tea\Model;

class running extends Model
{
    /**
     * @description The start time.
     *
     * @example 2021-05-23T20:49:31Z
     *
     * @var string
     */
    public $startedAtstartedAt;
    protected $_name = [
        'startedAtstartedAt' => 'StartedAtstartedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startedAtstartedAt) {
            $res['StartedAtstartedAt'] = $this->startedAtstartedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return running
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartedAtstartedAt'])) {
            $model->startedAtstartedAt = $map['StartedAtstartedAt'];
        }

        return $model;
    }
}
