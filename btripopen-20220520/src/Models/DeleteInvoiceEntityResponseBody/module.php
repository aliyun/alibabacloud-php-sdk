<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\DeleteInvoiceEntityResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $removeNum;

    /**
     * @var int
     */
    public $selectedUserNum;
    protected $_name = [
        'removeNum' => 'remove_num',
        'selectedUserNum' => 'selected_user_num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->removeNum) {
            $res['remove_num'] = $this->removeNum;
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
        if (isset($map['remove_num'])) {
            $model->removeNum = $map['remove_num'];
        }

        if (isset($map['selected_user_num'])) {
            $model->selectedUserNum = $map['selected_user_num'];
        }

        return $model;
    }
}
