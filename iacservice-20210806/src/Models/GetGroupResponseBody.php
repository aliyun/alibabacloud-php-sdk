<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetGroupResponseBody\group;

class GetGroupResponseBody extends Model
{
    /**
     * @var group
     */
    public $group;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'group' => 'group',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->group) {
            $this->group->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = null !== $this->group ? $this->group->toArray($noStream) : $this->group;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['group'])) {
            $model->group = group::fromMap($map['group']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
