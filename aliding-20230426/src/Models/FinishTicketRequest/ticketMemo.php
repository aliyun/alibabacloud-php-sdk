<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\FinishTicketRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\FinishTicketRequest\ticketMemo\attachments;
use AlibabaCloud\Tea\Model;

class ticketMemo extends Model
{
    /**
     * @var attachments[]
     */
    public $attachments;

    /**
     * @var string
     */
    public $memo;
    protected $_name = [
        'attachments' => 'Attachments',
        'memo' => 'Memo',
    ];

    public function validate() {}

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
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ticketMemo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attachments'])) {
            if (!empty($map['Attachments'])) {
                $model->attachments = [];
                $n = 0;
                foreach ($map['Attachments'] as $item) {
                    $model->attachments[$n++] = null !== $item ? attachments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }

        return $model;
    }
}
