<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\GetMessageGroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
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
     * @example 1
     *
     * @var mixed[]
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
     * @description Indicates whether the message group is muted.
     *
     *   true: The message group is muted.
     *   false: The message group is not muted.
     *
     * @example true
     *
     * @var bool
     */
    public $isMuteAll;

    /**
     * @description The status of the message group. The default value is **1**, which indicates that the message group is normal.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'extension' => 'Extension',
        'groupId' => 'GroupId',
        'isMuteAll' => 'IsMuteAll',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->isMuteAll) {
            $res['IsMuteAll'] = $this->isMuteAll;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['IsMuteAll'])) {
            $model->isMuteAll = $map['IsMuteAll'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
