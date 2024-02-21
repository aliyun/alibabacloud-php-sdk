<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceContainerLogResponseBody\logEntrys;

use AlibabaCloud\Tea\Model;

class logEntry extends Model
{
    /**
     * @example 2018-11-19 17:55:11,792 INFO [RMCommunicator Allocator] org.apache.hadoop.yarn.util.RackResolver: Resolved emr-worker-1.cluster-500160492 to /default-rack
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'content' => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
