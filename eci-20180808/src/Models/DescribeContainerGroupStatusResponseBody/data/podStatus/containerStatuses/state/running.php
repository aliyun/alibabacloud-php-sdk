<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\state;

use AlibabaCloud\Dara\Model;

class running extends Model
{
    /**
     * @var string
     */
    public $startedAtstartedAt;
    protected $_name = [
        'startedAtstartedAt' => 'StartedAtstartedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->startedAtstartedAt) {
            $res['StartedAtstartedAt'] = $this->startedAtstartedAt;
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
        if (isset($map['StartedAtstartedAt'])) {
            $model->startedAtstartedAt = $map['StartedAtstartedAt'];
        }

        return $model;
    }
}
