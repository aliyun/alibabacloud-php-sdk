<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\GetBasicStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class globalStatistics extends Model
{
    /**
     * @var int
     */
    public $protectedDataSize;

    /**
     * @var int
     */
    public $protectedResourceCount;
    protected $_name = [
        'protectedDataSize' => 'ProtectedDataSize',
        'protectedResourceCount' => 'ProtectedResourceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protectedDataSize) {
            $res['ProtectedDataSize'] = $this->protectedDataSize;
        }

        if (null !== $this->protectedResourceCount) {
            $res['ProtectedResourceCount'] = $this->protectedResourceCount;
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
        if (isset($map['ProtectedDataSize'])) {
            $model->protectedDataSize = $map['ProtectedDataSize'];
        }

        if (isset($map['ProtectedResourceCount'])) {
            $model->protectedResourceCount = $map['ProtectedResourceCount'];
        }

        return $model;
    }
}
