<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponseBody\contactDeletionStatus;

use AlibabaCloud\Dara\Model;

class failReasonList extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string[]
     */
    public $messageTypes;
    protected $_name = [
        'accountId' => 'AccountId',
        'messageTypes' => 'MessageTypes',
    ];

    public function validate()
    {
        if (\is_array($this->messageTypes)) {
            Model::validateArray($this->messageTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->messageTypes) {
            if (\is_array($this->messageTypes)) {
                $res['MessageTypes'] = [];
                $n1 = 0;
                foreach ($this->messageTypes as $item1) {
                    $res['MessageTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['MessageTypes'])) {
            if (!empty($map['MessageTypes'])) {
                $model->messageTypes = [];
                $n1 = 0;
                foreach ($map['MessageTypes'] as $item1) {
                    $model->messageTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
