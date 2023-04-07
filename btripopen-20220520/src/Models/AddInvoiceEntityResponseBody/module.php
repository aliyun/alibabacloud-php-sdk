<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddInvoiceEntityResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $addNum;

    /**
     * @example 2
     *
     * @var int
     */
    public $selectedUserNum;
    protected $_name = [
        'addNum'          => 'add_num',
        'selectedUserNum' => 'selected_user_num',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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
