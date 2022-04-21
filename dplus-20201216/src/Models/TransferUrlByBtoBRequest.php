<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;

class TransferUrlByBtoBRequest extends Model
{
    /**
     * @var int
     */
    public $offerId;

    /**
     * @var string
     */
    public $pid;
    protected $_name = [
        'offerId' => 'OfferId',
        'pid'     => 'Pid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offerId) {
            $res['OfferId'] = $this->offerId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferUrlByBtoBRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OfferId'])) {
            $model->offerId = $map['OfferId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
