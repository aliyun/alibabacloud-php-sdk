<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class DeleteAccountRequest extends Model
{
    /**
     * @var string[]
     */
    public $abandonableCheckId;

    /**
     * @var string
     */
    public $accountId;
    protected $_name = [
        'abandonableCheckId' => 'AbandonableCheckId',
        'accountId' => 'AccountId',
    ];

    public function validate()
    {
        if (\is_array($this->abandonableCheckId)) {
            Model::validateArray($this->abandonableCheckId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abandonableCheckId) {
            if (\is_array($this->abandonableCheckId)) {
                $res['AbandonableCheckId'] = [];
                $n1 = 0;
                foreach ($this->abandonableCheckId as $item1) {
                    $res['AbandonableCheckId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['AbandonableCheckId'])) {
                $model->abandonableCheckId = [];
                $n1 = 0;
                foreach ($map['AbandonableCheckId'] as $item1) {
                    $model->abandonableCheckId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}
