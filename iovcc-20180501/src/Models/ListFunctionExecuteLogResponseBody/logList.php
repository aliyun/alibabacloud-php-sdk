<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionExecuteLogResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionExecuteLogResponseBody\logList\logs;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionExecuteLogResponseBody\logList\pagination;
use AlibabaCloud\Tea\Model;

class logList extends Model
{
    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @var logs[]
     */
    public $logs;
    protected $_name = [
        'pagination' => 'Pagination',
        'logs'       => 'Logs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n           = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
