<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchRequest;

use AlibabaCloud\Dara\Model;

class option extends Model
{
    /**
     * @var bool
     */
    public $needTransfer;
    protected $_name = [
        'needTransfer' => 'need_transfer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needTransfer) {
            $res['need_transfer'] = $this->needTransfer;
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
        if (isset($map['need_transfer'])) {
            $model->needTransfer = $map['need_transfer'];
        }

        return $model;
    }
}
