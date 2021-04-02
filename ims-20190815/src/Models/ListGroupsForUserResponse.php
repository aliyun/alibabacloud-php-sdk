<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsForUserResponse\groups;
use AlibabaCloud\Tea\Model;

class ListGroupsForUserResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var groups
     */
    public $groups;
    protected $_name = [
        'requestId' => 'RequestId',
        'groups'    => 'Groups',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groups', $this->groups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsForUserResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
        }

        return $model;
    }
}
