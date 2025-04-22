<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetDomainQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $sizeQuota;

    /**
     * @var int
     */
    public $sizeUsed;

    /**
     * @var int
     */
    public $userCountQuota;

    /**
     * @var int
     */
    public $userCountUsed;
    protected $_name = [
        'sizeQuota' => 'size_quota',
        'sizeUsed' => 'size_used',
        'userCountQuota' => 'user_count_quota',
        'userCountUsed' => 'user_count_used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sizeQuota) {
            $res['size_quota'] = $this->sizeQuota;
        }

        if (null !== $this->sizeUsed) {
            $res['size_used'] = $this->sizeUsed;
        }

        if (null !== $this->userCountQuota) {
            $res['user_count_quota'] = $this->userCountQuota;
        }

        if (null !== $this->userCountUsed) {
            $res['user_count_used'] = $this->userCountUsed;
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
        if (isset($map['size_quota'])) {
            $model->sizeQuota = $map['size_quota'];
        }

        if (isset($map['size_used'])) {
            $model->sizeUsed = $map['size_used'];
        }

        if (isset($map['user_count_quota'])) {
            $model->userCountQuota = $map['user_count_quota'];
        }

        if (isset($map['user_count_used'])) {
            $model->userCountUsed = $map['user_count_used'];
        }

        return $model;
    }
}
