<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponseBody\mediaAuditResultDetail\list_;
use AlibabaCloud\Tea\Model;

class mediaAuditResultDetail extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **GetMediaAuditResultDetail**.
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description The score of the review result category. It is representative of the confidence. Valid values: `[0.00-100.00].` The value is rounded down to 10 decimal places.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'list'  => 'List',
        'total' => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaAuditResultDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
