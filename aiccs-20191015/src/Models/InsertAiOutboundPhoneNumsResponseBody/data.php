<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsResponseBody\data\failInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var failInfo[]
     */
    public $failInfo;

    /**
     * @example 7
     *
     * @var int
     */
    public $successCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failInfo'     => 'FailInfo',
        'successCount' => 'SuccessCount',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failInfo) {
            $res['FailInfo'] = [];
            if (null !== $this->failInfo && \is_array($this->failInfo)) {
                $n = 0;
                foreach ($this->failInfo as $item) {
                    $res['FailInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailInfo'])) {
            if (!empty($map['FailInfo'])) {
                $model->failInfo = [];
                $n               = 0;
                foreach ($map['FailInfo'] as $item) {
                    $model->failInfo[$n++] = null !== $item ? failInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
