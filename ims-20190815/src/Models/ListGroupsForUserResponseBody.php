<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserResponseBody\groups;

class ListGroupsForUserResponseBody extends Model
{
    /**
     * @var groups
     */
    public $groups;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groups'    => 'Groups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->groups) {
            $this->groups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toArray($noStream) : $this->groups;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
