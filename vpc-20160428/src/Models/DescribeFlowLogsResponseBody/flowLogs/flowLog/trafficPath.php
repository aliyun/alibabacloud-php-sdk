<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs\flowLog;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficPathList) {
            $res['TrafficPathList'] = $this->trafficPathList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficPath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficPathList'])) {
            if (!empty($map['TrafficPathList'])) {
                $model->trafficPathList = $map['TrafficPathList'];
            }
        }

        return $model;
    }
}
