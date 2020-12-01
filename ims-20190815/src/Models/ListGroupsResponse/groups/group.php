<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsResponse\groups;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'displayName' => 'DisplayName',
        'comments'    => 'Comments',
        'createDate'  => 'CreateDate',
        'updateDate'  => 'UpdateDate',
        'groupName'   => 'GroupName',
        'groupId'     => 'GroupId',
    ];

    public function validate()
    {
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('groupId', $this->groupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
