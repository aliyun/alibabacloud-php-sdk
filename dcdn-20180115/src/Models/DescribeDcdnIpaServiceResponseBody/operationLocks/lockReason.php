<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaServiceResponseBody\operationLocks;

use AlibabaCloud\Tea\Model;

class lockReason extends Model
{
    /**
     * @description The reason why the IPA service was locked. A value of **financial** indicates that your account has an overdue payment.
     *
     * @example financial
     *
     * @var string
     */
    public $lockReason;
    protected $_name = [
        'lockReason' => 'LockReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lockReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }

        return $model;
    }
}
