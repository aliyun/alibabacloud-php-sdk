<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\UpdateGroupResponseBody\group;
use AlibabaCloud\Tea\Model;

class UpdateGroupResponseBody extends Model
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
     * @example EC6647CC-0A36-EC7A-BA72-CC81BF3DE182
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
     * @return UpdateGroupResponseBody
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
