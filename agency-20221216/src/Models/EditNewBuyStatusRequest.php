<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class EditNewBuyStatusRequest extends Model
{
    /**
     * @var string
     */
    public $newBuyStatus;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'newBuyStatus' => 'NewBuyStatus',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newBuyStatus) {
            $res['NewBuyStatus'] = $this->newBuyStatus;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['NewBuyStatus'])) {
            $model->newBuyStatus = $map['NewBuyStatus'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
