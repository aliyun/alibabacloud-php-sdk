<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListSystemLogsResponseBody\systemLogs;
use AlibabaCloud\Tea\Model;

class ListSystemLogsResponseBody extends Model
{
    /**
     * @var systemLogs[]
     */
    public $systemLogs;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'systemLogs' => 'SystemLogs',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemLogs) {
            $res['SystemLogs'] = [];
            if (null !== $this->systemLogs && \is_array($this->systemLogs)) {
                $n = 0;
                foreach ($this->systemLogs as $item) {
                    $res['SystemLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemLogs'])) {
            if (!empty($map['SystemLogs'])) {
                $model->systemLogs = [];
                $n = 0;
                foreach ($map['SystemLogs'] as $item) {
                    $model->systemLogs[$n++] = null !== $item ? systemLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
