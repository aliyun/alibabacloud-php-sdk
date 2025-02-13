<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryMeetingRoomGroupResponseBody extends Model
{
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var int
     */
    public $parentId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupId'   => 'groupId',
        'groupName' => 'groupName',
        'parentId'  => 'parentId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
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
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
