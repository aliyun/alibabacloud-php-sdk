<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponseBody\recordLogs\recordLog;
use AlibabaCloud\Tea\Model;

class recordLogs extends Model
{
    /**
     * @var recordLog[]
     */
    public $recordLog;
    protected $_name = [
        'recordLog' => 'RecordLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordLog) {
            $res['RecordLog'] = [];
            if (null !== $this->recordLog && \is_array($this->recordLog)) {
                $n = 0;
                foreach ($this->recordLog as $item) {
                    $res['RecordLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordLog'])) {
            if (!empty($map['RecordLog'])) {
                $model->recordLog = [];
                $n                = 0;
                foreach ($map['RecordLog'] as $item) {
                    $model->recordLog[$n++] = null !== $item ? recordLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
