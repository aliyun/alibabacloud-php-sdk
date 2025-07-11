<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody;

use AlibabaCloud\Tea\Model;

class stateInfo extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @example SessionStarted
     *
     * @var string
     */
    public $state;

    /**
     * @example 2024-10-15T10:05:20+08:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'comment' => 'Comment',
        'state' => 'State',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
