<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponseBody\recordLogs\recordLog;

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
        if (\is_array($this->recordLog)) {
            Model::validateArray($this->recordLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordLog) {
            if (\is_array($this->recordLog)) {
                $res['RecordLog'] = [];
                $n1 = 0;
                foreach ($this->recordLog as $item1) {
                    $res['RecordLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordLog'])) {
            if (!empty($map['RecordLog'])) {
                $model->recordLog = [];
                $n1 = 0;
                foreach ($map['RecordLog'] as $item1) {
                    $model->recordLog[$n1++] = recordLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
