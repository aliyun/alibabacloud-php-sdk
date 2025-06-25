<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class hostGroups extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $hostGroupName;

    /**
     * @var int
     */
    public $memberCount;
    protected $_name = [
        'comment' => 'Comment',
        'hostGroupId' => 'HostGroupId',
        'hostGroupName' => 'HostGroupName',
        'memberCount' => 'MemberCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }

        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }

        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }

        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }

        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }

        return $model;
    }
}
