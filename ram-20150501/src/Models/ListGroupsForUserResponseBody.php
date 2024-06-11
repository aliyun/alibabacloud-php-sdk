<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserResponseBody\groups;
use AlibabaCloud\Tea\Model;

class ListGroupsForUserResponseBody extends Model
{
    /**
     * @description The list of the RAM user groups.
     *
     * @var groups
     */
    public $groups;

    /**
     * @description The ID of the request.
     *
     * @example DA772B52-BF9F-54CA-AC77-AA7A2DA89D46
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
