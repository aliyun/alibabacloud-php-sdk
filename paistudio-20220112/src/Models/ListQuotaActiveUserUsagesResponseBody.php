<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListQuotaActiveUserUsagesResponseBody extends Model
{
    /**
     * @var QuotaUser[]
     */
    public $quotaUserUsage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'quotaUserUsage' => 'QuotaUserUsage',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->quotaUserUsage)) {
            Model::validateArray($this->quotaUserUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaUserUsage) {
            if (\is_array($this->quotaUserUsage)) {
                $res['QuotaUserUsage'] = [];
                $n1 = 0;
                foreach ($this->quotaUserUsage as $item1) {
                    $res['QuotaUserUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['QuotaUserUsage'])) {
            if (!empty($map['QuotaUserUsage'])) {
                $model->quotaUserUsage = [];
                $n1 = 0;
                foreach ($map['QuotaUserUsage'] as $item1) {
                    $model->quotaUserUsage[$n1] = QuotaUser::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
