<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody\data\attachments;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody\data\dialog;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody\data\user;

class data extends Model
{
    /**
     * @var attachments[]
     */
    public $attachments;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var dialog
     */
    public $dialog;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tip;

    /**
     * @var int
     */
    public $type;

    /**
     * @var user
     */
    public $user;
    protected $_name = [
        'attachments' => 'Attachments',
        'createTime' => 'CreateTime',
        'dialog' => 'Dialog',
        'dialogId' => 'DialogId',
        'status' => 'Status',
        'tip' => 'Tip',
        'type' => 'Type',
        'user' => 'User',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        if (null !== $this->dialog) {
            $this->dialog->validate();
        }
        if (null !== $this->user) {
            $this->user->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['Attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['Attachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dialog) {
            $res['Dialog'] = null !== $this->dialog ? $this->dialog->toArray($noStream) : $this->dialog;
        }

        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tip) {
            $res['Tip'] = $this->tip;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toArray($noStream) : $this->user;
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
        if (isset($map['Attachments'])) {
            if (!empty($map['Attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['Attachments'] as $item1) {
                    $model->attachments[$n1] = attachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Dialog'])) {
            $model->dialog = dialog::fromMap($map['Dialog']);
        }

        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tip'])) {
            $model->tip = $map['Tip'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}
