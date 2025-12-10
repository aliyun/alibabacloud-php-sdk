<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class DeleteAccountShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $abandonableCheckIdShrink;

    /**
     * @var string
     */
    public $accountId;
    protected $_name = [
        'abandonableCheckIdShrink' => 'AbandonableCheckId',
        'accountId' => 'AccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abandonableCheckIdShrink) {
            $res['AbandonableCheckId'] = $this->abandonableCheckIdShrink;
        }

        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
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
        if (isset($map['AbandonableCheckId'])) {
            $model->abandonableCheckIdShrink = $map['AbandonableCheckId'];
        }

        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}
