<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserResponseBody\groups;
use AlibabaCloud\Tea\Model;

class ListGroupsForUserResponseBody extends Model
{
    /**
     * @description The information about the RAM user groups.
     *
     * @var groups
     */
    public $groups;

    /**
     * @description The request ID.
     *
     * @example 7158A935-FB5E-49A7-8E52-FDA5B2B67247
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groups'    => 'Groups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsForUserResponseBody
     */
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
