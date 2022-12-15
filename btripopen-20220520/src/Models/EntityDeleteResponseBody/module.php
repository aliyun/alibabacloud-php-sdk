<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $removeNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $selectedUserNum;
    protected $_name = [
        'removeNum'       => 'remove_num',
        'selectedUserNum' => 'selected_user_num',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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
