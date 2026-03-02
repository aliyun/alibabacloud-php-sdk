<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class GetTokenRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $pbcId;
    protected $_name = [
        'accountId' => 'accountId',
        'pbcId' => 'pbcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        return $model;
    }
}
