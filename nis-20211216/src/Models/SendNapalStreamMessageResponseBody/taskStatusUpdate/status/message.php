<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate\status;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate\status\message\parts;

class message extends Model
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var parts[]
     */
    public $parts;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'messageId' => 'MessageId',
        'parts' => 'Parts',
        'role' => 'Role',
    ];

    public function validate()
    {
        if (\is_array($this->parts)) {
            Model::validateArray($this->parts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->parts) {
            if (\is_array($this->parts)) {
                $res['Parts'] = [];
                $n1 = 0;
                foreach ($this->parts as $item1) {
                    $res['Parts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Parts'])) {
            if (!empty($map['Parts'])) {
                $model->parts = [];
                $n1 = 0;
                foreach ($map['Parts'] as $item1) {
                    $model->parts[$n1] = parts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
