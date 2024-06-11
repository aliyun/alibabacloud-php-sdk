<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetGroupResponseBody\group;
use AlibabaCloud\Tea\Model;

class GetGroupResponseBody extends Model
{
    /**
     * @description The information of the RAM user group.
     *
     * @var group
     */
    public $group;

    /**
     * @description The ID of the request.
     *
     * @example D4065824-E422-3ED6-68B1-1AF7D5C7804C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'group'     => 'Group',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = group::fromMap($map['Group']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
