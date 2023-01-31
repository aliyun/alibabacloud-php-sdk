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
        'trafficPathList' => 'trafficPathList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficPathList) {
            $res['trafficPathList'] = $this->trafficPathList;
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
        if (isset($map['trafficPathList'])) {
            if (!empty($map['trafficPathList'])) {
                $model->trafficPathList = $map['trafficPathList'];
            }
        }

        return $model;
    }
}
