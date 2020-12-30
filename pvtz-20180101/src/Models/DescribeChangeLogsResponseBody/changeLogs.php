<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody\changeLogs\changeLog;
use AlibabaCloud\Tea\Model;

class changeLogs extends Model
{
    /**
     * @var changeLog[]
     */
    public $changeLog;
    protected $_name = [
        'changeLog' => 'ChangeLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeLog) {
            $res['ChangeLog'] = [];
            if (null !== $this->changeLog && \is_array($this->changeLog)) {
                $n = 0;
                foreach ($this->changeLog as $item) {
                    $res['ChangeLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeLog'])) {
            if (!empty($map['ChangeLog'])) {
                $model->changeLog = [];
                $n                = 0;
                foreach ($map['ChangeLog'] as $item) {
                    $model->changeLog[$n++] = null !== $item ? changeLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
