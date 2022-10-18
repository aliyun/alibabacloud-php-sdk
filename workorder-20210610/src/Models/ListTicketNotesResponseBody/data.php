<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody;

use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody\data\attachments;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody\data\dialog;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListTicketNotesResponseBody\data\user;
use AlibabaCloud\Tea\Model;

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
        'createTime'  => 'CreateTime',
        'dialog'      => 'Dialog',
        'dialogId'    => 'DialogId',
        'status'      => 'Status',
        'tip'         => 'Tip',
        'type'        => 'Type',
        'user'        => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachments) {
            $res['Attachments'] = [];
            if (null !== $this->attachments && \is_array($this->attachments)) {
                $n = 0;
                foreach ($this->attachments as $item) {
                    $res['Attachments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dialog) {
            $res['Dialog'] = null !== $this->dialog ? $this->dialog->toMap() : null;
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
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attachments'])) {
            if (!empty($map['Attachments'])) {
                $model->attachments = [];
                $n                  = 0;
                foreach ($map['Attachments'] as $item) {
                    $model->attachments[$n++] = null !== $item ? attachments::fromMap($item) : $item;
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
