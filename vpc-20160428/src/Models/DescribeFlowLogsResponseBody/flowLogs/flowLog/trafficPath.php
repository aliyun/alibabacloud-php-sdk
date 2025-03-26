<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs\flowLog;

use AlibabaCloud\Dara\Model;

class trafficPath extends Model
{
    /**
     * @var string[]
     */
    public $trafficPathList;
    protected $_name = [
        'trafficPathList' => 'TrafficPathList',
    ];

    public function validate()
    {
        if (\is_array($this->trafficPathList)) {
            Model::validateArray($this->trafficPathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficPathList) {
            if (\is_array($this->trafficPathList)) {
                $res['TrafficPathList'] = [];
                $n1 = 0;
                foreach ($this->trafficPathList as $item1) {
                    $res['TrafficPathList'][$n1++] = $item1;
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
        if (isset($map['TrafficPathList'])) {
            if (!empty($map['TrafficPathList'])) {
                $model->trafficPathList = [];
                $n1 = 0;
                foreach ($map['TrafficPathList'] as $item1) {
                    $model->trafficPathList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
