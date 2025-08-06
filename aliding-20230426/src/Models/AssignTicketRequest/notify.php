<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketRequest;

use AlibabaCloud\Dara\Model;

class notify extends Model
{
    /**
     * @var string[]
     */
    public $groupNoticeReceiverUserIds;

    /**
     * @var bool
     */
    public $noticeAllGroupMember;

    /**
     * @var string[]
     */
    public $workNoticeReceiverUserIds;
    protected $_name = [
        'groupNoticeReceiverUserIds' => 'GroupNoticeReceiverUserIds',
        'noticeAllGroupMember' => 'NoticeAllGroupMember',
        'workNoticeReceiverUserIds' => 'WorkNoticeReceiverUserIds',
    ];

    public function validate()
    {
        if (\is_array($this->groupNoticeReceiverUserIds)) {
            Model::validateArray($this->groupNoticeReceiverUserIds);
        }
        if (\is_array($this->workNoticeReceiverUserIds)) {
            Model::validateArray($this->workNoticeReceiverUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupNoticeReceiverUserIds) {
            if (\is_array($this->groupNoticeReceiverUserIds)) {
                $res['GroupNoticeReceiverUserIds'] = [];
                $n1 = 0;
                foreach ($this->groupNoticeReceiverUserIds as $item1) {
                    $res['GroupNoticeReceiverUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noticeAllGroupMember) {
            $res['NoticeAllGroupMember'] = $this->noticeAllGroupMember;
        }

        if (null !== $this->workNoticeReceiverUserIds) {
            if (\is_array($this->workNoticeReceiverUserIds)) {
                $res['WorkNoticeReceiverUserIds'] = [];
                $n1 = 0;
                foreach ($this->workNoticeReceiverUserIds as $item1) {
                    $res['WorkNoticeReceiverUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['GroupNoticeReceiverUserIds'])) {
            if (!empty($map['GroupNoticeReceiverUserIds'])) {
                $model->groupNoticeReceiverUserIds = [];
                $n1 = 0;
                foreach ($map['GroupNoticeReceiverUserIds'] as $item1) {
                    $model->groupNoticeReceiverUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NoticeAllGroupMember'])) {
            $model->noticeAllGroupMember = $map['NoticeAllGroupMember'];
        }

        if (isset($map['WorkNoticeReceiverUserIds'])) {
            if (!empty($map['WorkNoticeReceiverUserIds'])) {
                $model->workNoticeReceiverUserIds = [];
                $n1 = 0;
                foreach ($map['WorkNoticeReceiverUserIds'] as $item1) {
                    $model->workNoticeReceiverUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
