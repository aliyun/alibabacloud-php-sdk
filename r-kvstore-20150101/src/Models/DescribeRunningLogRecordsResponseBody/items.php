<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRunningLogRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRunningLogRecordsResponseBody\items\logRecords;

class items extends Model
{
    /**
     * @var logRecords[]
     */
    public $logRecords;
    protected $_name = [
        'logRecords' => 'LogRecords',
    ];

    public function validate()
    {
        if (\is_array($this->logRecords)) {
            Model::validateArray($this->logRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logRecords) {
            if (\is_array($this->logRecords)) {
                $res['LogRecords'] = [];
                $n1 = 0;
                foreach ($this->logRecords as $item1) {
                    $res['LogRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogRecords'])) {
            if (!empty($map['LogRecords'])) {
                $model->logRecords = [];
                $n1 = 0;
                foreach ($map['LogRecords'] as $item1) {
                    $model->logRecords[$n1] = logRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
