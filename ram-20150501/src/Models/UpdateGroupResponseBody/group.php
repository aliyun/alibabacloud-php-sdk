<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\UpdateGroupResponseBody;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description The description of the RAM user group.
     *
     * @example NewDev-Team
     *
     * @var string
     */
    public $comments;

    /**
     * @description The time when the RAM user group was created.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The ID of the RAM user group.
     *
     * @example g-FpMEHiMysofp****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The new name of the RAM user group.
     *
     * @example NewDev-Team
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The time when the information of the RAM user group was updated.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'comments'   => 'Comments',
        'createDate' => 'CreateDate',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
        'updateDate' => 'UpdateDate',
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
