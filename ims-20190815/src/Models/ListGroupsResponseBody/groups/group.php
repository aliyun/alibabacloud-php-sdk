<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListGroupsResponseBody\groups;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description The description.
     *
     * @var string
     */
    public $comments;

    /**
     * @description The creation time.
     *
     * @example 2020-10-19T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The display name of the RAM user group.
     *
     * @example Dev-Team
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the RAM user group.
     *
     * @example 740317625433843****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the RAM user group.
     *
     * @example dev-team
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The update time.
     *
     * @example 2020-10-19T12:33:18Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'comments'    => 'Comments',
        'createDate'  => 'CreateDate',
        'displayName' => 'DisplayName',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'updateDate'  => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
