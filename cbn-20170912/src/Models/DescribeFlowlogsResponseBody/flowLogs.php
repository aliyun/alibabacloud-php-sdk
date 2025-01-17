<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody\flowLogs\flowLog;

class flowLogs extends Model
{
    /**
     * @var flowLog[]
     */
    public $flowLog;
    protected $_name = [
        'flowLog' => 'FlowLog',
    ];

    public function validate()
    {
        if (\is_array($this->flowLog)) {
            Model::validateArray($this->flowLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowLog) {
            if (\is_array($this->flowLog)) {
                $res['FlowLog'] = [];
                $n1             = 0;
                foreach ($this->flowLog as $item1) {
                    $res['FlowLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FlowLog'])) {
            if (!empty($map['FlowLog'])) {
                $model->flowLog = [];
                $n1             = 0;
                foreach ($map['FlowLog'] as $item1) {
                    $model->flowLog[$n1++] = flowLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
