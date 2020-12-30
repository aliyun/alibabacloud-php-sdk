<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceLauncherLogResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceLauncherLogResponseBody\logEntrys\logEntry;
use AlibabaCloud\Tea\Model;

class logEntrys extends Model
{
    /**
     * @var logEntry[]
     */
    public $logEntry;
    protected $_name = [
        'logEntry' => 'LogEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logEntry) {
            $res['LogEntry'] = [];
            if (null !== $this->logEntry && \is_array($this->logEntry)) {
                $n = 0;
                foreach ($this->logEntry as $item) {
                    $res['LogEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logEntrys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogEntry'])) {
            if (!empty($map['LogEntry'])) {
                $model->logEntry = [];
                $n               = 0;
                foreach ($map['LogEntry'] as $item) {
                    $model->logEntry[$n++] = null !== $item ? logEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
