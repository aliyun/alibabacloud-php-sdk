<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $newComments;
    /**
     * @var string
     */
    public $newDisplayName;
    /**
     * @var string
     */
    public $newGroupName;
    protected $_name = [
        'groupName'      => 'GroupName',
        'newComments'    => 'NewComments',
        'newDisplayName' => 'NewDisplayName',
        'newGroupName'   => 'NewGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->newComments) {
            $res['NewComments'] = $this->newComments;
        }

        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }

        if (null !== $this->newGroupName) {
            $res['NewGroupName'] = $this->newGroupName;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['NewComments'])) {
            $model->newComments = $map['NewComments'];
        }

        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }

        if (isset($map['NewGroupName'])) {
            $model->newGroupName = $map['NewGroupName'];
        }

        return $model;
    }
}
