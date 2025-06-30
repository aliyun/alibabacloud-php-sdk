<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody\changeLogs\changeLog;

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
        if (\is_array($this->changeLog)) {
            Model::validateArray($this->changeLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeLog) {
            if (\is_array($this->changeLog)) {
                $res['ChangeLog'] = [];
                $n1 = 0;
                foreach ($this->changeLog as $item1) {
                    $res['ChangeLog'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ChangeLog'])) {
            if (!empty($map['ChangeLog'])) {
                $model->changeLog = [];
                $n1 = 0;
                foreach ($map['ChangeLog'] as $item1) {
                    $model->changeLog[$n1] = changeLog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
