<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeNodeToolExecutionHistoriesResponseBody;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeNodeToolExecutionHistoriesResponseBody\histories\history;
use AlibabaCloud\Tea\Model;

class histories extends Model
{
    /**
     * @var history[]
     */
    public $history;
    protected $_name = [
        'history' => 'History',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->history) {
            $res['History'] = [];
            if (null !== $this->history && \is_array($this->history)) {
                $n = 0;
                foreach ($this->history as $item) {
                    $res['History'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return histories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['History'])) {
            if (!empty($map['History'])) {
                $model->history = [];
                $n              = 0;
                foreach ($map['History'] as $item) {
                    $model->history[$n++] = null !== $item ? history::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
