<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class EditEndUserStatusRequest extends Model
{
    /**
     * @var string
     */
    public $creditStatus;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'creditStatus' => 'CreditStatus',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditStatus) {
            $res['CreditStatus'] = $this->creditStatus;
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
        if (isset($map['CreditStatus'])) {
            $model->creditStatus = $map['CreditStatus'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
