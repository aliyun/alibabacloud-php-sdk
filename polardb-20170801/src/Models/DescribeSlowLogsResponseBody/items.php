<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponseBody\items\SQLSlowLog;

class items extends Model
{
    /**
     * @var SQLSlowLog[]
     */
    public $SQLSlowLog;
    protected $_name = [
        'SQLSlowLog' => 'SQLSlowLog',
    ];

    public function validate()
    {
        if (\is_array($this->SQLSlowLog)) {
            Model::validateArray($this->SQLSlowLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SQLSlowLog) {
            if (\is_array($this->SQLSlowLog)) {
                $res['SQLSlowLog'] = [];
                $n1 = 0;
                foreach ($this->SQLSlowLog as $item1) {
                    $res['SQLSlowLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SQLSlowLog'])) {
            if (!empty($map['SQLSlowLog'])) {
                $model->SQLSlowLog = [];
                $n1 = 0;
                foreach ($map['SQLSlowLog'] as $item1) {
                    $model->SQLSlowLog[$n1++] = SQLSlowLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
