<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupResponseBody\result;

use AlibabaCloud\Tea\Model;

class groupList extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the message group was created. The time is displayed in UTC.
     *
     * @example 1502280113
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the creator.
     *
     * @example as****hs
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The extended field.
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description The ID of the message group.
     *
     * @example AE35-****-T95F
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The status of the message group. The default value is **1**, which indicates that the status of the message group is normal.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'appId' => 'AppId',
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'extension' => 'Extension',
        'groupId' => 'GroupId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
