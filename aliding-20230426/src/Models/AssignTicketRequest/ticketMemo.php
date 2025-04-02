<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketRequest\ticketMemo\attachments;

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

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
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
                    $res['Attachments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
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
                    $model->attachments[$n1++] = attachments::fromMap($item1);
                }
            }
        }

        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }

        return $model;
    }
}
