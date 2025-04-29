<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $addNum;

    /**
     * @var int
     */
    public $selectedUserNum;
    protected $_name = [
        'addNum' => 'add_num',
        'selectedUserNum' => 'selected_user_num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addNum) {
            $res['add_num'] = $this->addNum;
        }

        if (null !== $this->selectedUserNum) {
            $res['selected_user_num'] = $this->selectedUserNum;
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
        if (isset($map['add_num'])) {
            $model->addNum = $map['add_num'];
        }

        if (isset($map['selected_user_num'])) {
            $model->selectedUserNum = $map['selected_user_num'];
        }

        return $model;
    }
}
