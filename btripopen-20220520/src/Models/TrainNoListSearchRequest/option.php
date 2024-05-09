<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainNoListSearchRequest;

use AlibabaCloud\Tea\Model;

class option extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $needTransfer;
    protected $_name = [
        'needTransfer' => 'need_transfer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needTransfer) {
            $res['need_transfer'] = $this->needTransfer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return option
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['need_transfer'])) {
            $model->needTransfer = $map['need_transfer'];
        }

        return $model;
    }
}
