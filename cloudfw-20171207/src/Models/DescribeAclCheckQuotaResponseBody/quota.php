<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class quota extends Model
{
    /**
     * @var int
     */
    public $availableQuota;

    /**
     * @var int
     */
    public $consumedQuota;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'availableQuota' => 'AvailableQuota',
        'consumedQuota' => 'ConsumedQuota',
        'totalQuota' => 'TotalQuota',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableQuota) {
            $res['AvailableQuota'] = $this->availableQuota;
        }

        if (null !== $this->consumedQuota) {
            $res['ConsumedQuota'] = $this->consumedQuota;
        }

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AvailableQuota'])) {
            $model->availableQuota = $map['AvailableQuota'];
        }

        if (isset($map['ConsumedQuota'])) {
            $model->consumedQuota = $map['ConsumedQuota'];
        }

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
