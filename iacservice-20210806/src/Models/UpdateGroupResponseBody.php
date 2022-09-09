<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupResponseBody\group;
use AlibabaCloud\Tea\Model;

class UpdateGroupResponseBody extends Model
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
        'group'     => 'group',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = null !== $this->group ? $this->group->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGroupResponseBody
     */
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
