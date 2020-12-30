<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetLogsListResponseBody;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetLogsListResponseBody\logList\log;
use AlibabaCloud\Tea\Model;

class logList extends Model
{
    /**
     * @var log[]
     */
    public $log;
    protected $_name = [
        'log' => 'Log',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->log) {
            $res['Log'] = [];
            if (null !== $this->log && \is_array($this->log)) {
                $n = 0;
                foreach ($this->log as $item) {
                    $res['Log'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Log'])) {
            if (!empty($map['Log'])) {
                $model->log = [];
                $n          = 0;
                foreach ($map['Log'] as $item) {
                    $model->log[$n++] = null !== $item ? log::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
