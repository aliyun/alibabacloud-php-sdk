<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectClusterSettingResponseBody;

use AlibabaCloud\Tea\Model;

class queueList extends Model
{
    /**
     * @var string[]
     */
    public $queue;
    protected $_name = [
        'queue' => 'Queue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Queue'])) {
            if (!empty($map['Queue'])) {
                $model->queue = $map['Queue'];
            }
        }

        return $model;
    }
}
