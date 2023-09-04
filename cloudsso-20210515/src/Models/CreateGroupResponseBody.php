<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateGroupResponseBody\group;
use AlibabaCloud\Tea\Model;

class CreateGroupResponseBody extends Model
{
    /**
     * @description The information about the group.
     *
     * @var group
     */
    public $group;

    /**
     * @description The ID of the request.
     *
     * @example 20E9650E-EC23-593E-933F-EA0D280D040C
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
     * @return CreateGroupResponseBody
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
