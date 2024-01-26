<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponseBody\data;

use AlibabaCloud\Tea\Model;

class eventUpdates extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 1680660940017
     *
     * @var int
     */
    public $publishTime;
    protected $_name = [
        'content'     => 'Content',
        'publishTime' => 'PublishTime',
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
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventUpdates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        return $model;
    }
}
