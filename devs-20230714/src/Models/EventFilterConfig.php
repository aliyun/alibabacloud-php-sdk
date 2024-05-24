<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class EventFilterConfig extends Model
{
    /**
     * @var PullRequestFilter
     */
    public $pullRequest;

    /**
     * @var PushFilter
     */
    public $push;
    protected $_name = [
        'pullRequest' => 'pullRequest',
        'push'        => 'push',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pullRequest) {
            $res['pullRequest'] = null !== $this->pullRequest ? $this->pullRequest->toMap() : null;
        }
        if (null !== $this->push) {
            $res['push'] = null !== $this->push ? $this->push->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EventFilterConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pullRequest'])) {
            $model->pullRequest = PullRequestFilter::fromMap($map['pullRequest']);
        }
        if (isset($map['push'])) {
            $model->push = PushFilter::fromMap($map['push']);
        }

        return $model;
    }
}
