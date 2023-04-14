<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskItemsResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskItemsResponseBody\result\detail;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;

    /**
     * @example 1
     *
     * @var string
     */
    public $validCount;
    protected $_name = [
        'detail'     => 'detail',
        'totalCount' => 'totalCount',
        'validCount' => 'validCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->validCount) {
            $res['validCount'] = $this->validCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            if (!empty($map['detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['validCount'])) {
            $model->validCount = $map['validCount'];
        }

        return $model;
    }
}
