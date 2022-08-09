<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceRuleSaveResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $addNum;

    /**
     * @var int
     */
    public $removeNum;
    protected $_name = [
        'addNum'    => 'add_num',
        'removeNum' => 'remove_num',
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
        if (null !== $this->removeNum) {
            $res['remove_num'] = $this->removeNum;
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
        if (isset($map['remove_num'])) {
            $model->removeNum = $map['remove_num'];
        }

        return $model;
    }
}
