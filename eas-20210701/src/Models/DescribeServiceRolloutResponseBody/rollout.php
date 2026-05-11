<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceRolloutResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceRolloutResponseBody\rollout\status;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceRolloutResponseBody\rollout\strategy;

class rollout extends Model
{
    /**
     * @var status
     */
    public $status;

    /**
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'status' => 'Status',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
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
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }

        return $model;
    }
}
