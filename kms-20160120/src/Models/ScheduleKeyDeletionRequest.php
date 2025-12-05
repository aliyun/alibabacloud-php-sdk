<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class ScheduleKeyDeletionRequest extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var int
     */
    public $pendingWindowInDays;
    protected $_name = [
        'keyId' => 'KeyId',
        'pendingWindowInDays' => 'PendingWindowInDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->pendingWindowInDays) {
            $res['PendingWindowInDays'] = $this->pendingWindowInDays;
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
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['PendingWindowInDays'])) {
            $model->pendingWindowInDays = $map['PendingWindowInDays'];
        }

        return $model;
    }
}
