<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\FinishTicketRequest;

use AlibabaCloud\Tea\Model;

class notify extends Model
{
    /**
     * @var string[]
     */
    public $groupNoticeReceiverUserIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $noticeAllGroupMember;

    /**
     * @var string[]
     */
    public $workNoticeReceiverUserIds;
    protected $_name = [
        'groupNoticeReceiverUserIds' => 'GroupNoticeReceiverUserIds',
        'noticeAllGroupMember'       => 'NoticeAllGroupMember',
        'workNoticeReceiverUserIds'  => 'WorkNoticeReceiverUserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupNoticeReceiverUserIds) {
            $res['GroupNoticeReceiverUserIds'] = $this->groupNoticeReceiverUserIds;
        }
        if (null !== $this->noticeAllGroupMember) {
            $res['NoticeAllGroupMember'] = $this->noticeAllGroupMember;
        }
        if (null !== $this->workNoticeReceiverUserIds) {
            $res['WorkNoticeReceiverUserIds'] = $this->workNoticeReceiverUserIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notify
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupNoticeReceiverUserIds'])) {
            if (!empty($map['GroupNoticeReceiverUserIds'])) {
                $model->groupNoticeReceiverUserIds = $map['GroupNoticeReceiverUserIds'];
            }
        }
        if (isset($map['NoticeAllGroupMember'])) {
            $model->noticeAllGroupMember = $map['NoticeAllGroupMember'];
        }
        if (isset($map['WorkNoticeReceiverUserIds'])) {
            if (!empty($map['WorkNoticeReceiverUserIds'])) {
                $model->workNoticeReceiverUserIds = $map['WorkNoticeReceiverUserIds'];
            }
        }

        return $model;
    }
}
