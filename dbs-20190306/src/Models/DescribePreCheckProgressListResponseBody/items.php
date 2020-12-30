<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListResponseBody;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListResponseBody\items\preCheckProgressDetail;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var preCheckProgressDetail[]
     */
    public $preCheckProgressDetail;
    protected $_name = [
        'preCheckProgressDetail' => 'PreCheckProgressDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckProgressDetail) {
            $res['PreCheckProgressDetail'] = [];
            if (null !== $this->preCheckProgressDetail && \is_array($this->preCheckProgressDetail)) {
                $n = 0;
                foreach ($this->preCheckProgressDetail as $item) {
                    $res['PreCheckProgressDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckProgressDetail'])) {
            if (!empty($map['PreCheckProgressDetail'])) {
                $model->preCheckProgressDetail = [];
                $n                             = 0;
                foreach ($map['PreCheckProgressDetail'] as $item) {
                    $model->preCheckProgressDetail[$n++] = null !== $item ? preCheckProgressDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
