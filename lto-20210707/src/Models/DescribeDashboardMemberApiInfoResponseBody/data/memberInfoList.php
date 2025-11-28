<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardMemberApiInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class memberInfoList extends Model
{
    /**
     * @var int
     */
    public $apiInvokeCount;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'apiInvokeCount' => 'ApiInvokeCount',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiInvokeCount) {
            $res['ApiInvokeCount'] = $this->apiInvokeCount;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['ApiInvokeCount'])) {
            $model->apiInvokeCount = $map['ApiInvokeCount'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
