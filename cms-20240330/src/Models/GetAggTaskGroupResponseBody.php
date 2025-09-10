<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAggTaskGroupResponseBody\aggTaskGroup;

class GetAggTaskGroupResponseBody extends Model
{
    /**
     * @var aggTaskGroup
     */
    public $aggTaskGroup;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'aggTaskGroup' => 'aggTaskGroup',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate()
    {
        if (null !== $this->aggTaskGroup) {
            $this->aggTaskGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggTaskGroup) {
            $res['aggTaskGroup'] = null !== $this->aggTaskGroup ? $this->aggTaskGroup->toArray($noStream) : $this->aggTaskGroup;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['aggTaskGroup'])) {
            $model->aggTaskGroup = aggTaskGroup::fromMap($map['aggTaskGroup']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
