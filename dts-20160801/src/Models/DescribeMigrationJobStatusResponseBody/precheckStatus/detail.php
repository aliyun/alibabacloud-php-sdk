<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\precheckStatus;

use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobStatusResponseBody\precheckStatus\detail\checkItem;
use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var checkItem[]
     */
    public $checkItem;
    protected $_name = [
        'checkItem' => 'CheckItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItem) {
            $res['CheckItem'] = [];
            if (null !== $this->checkItem && \is_array($this->checkItem)) {
                $n = 0;
                foreach ($this->checkItem as $item) {
                    $res['CheckItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItem'])) {
            if (!empty($map['CheckItem'])) {
                $model->checkItem = [];
                $n                = 0;
                foreach ($map['CheckItem'] as $item) {
                    $model->checkItem[$n++] = null !== $item ? checkItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
