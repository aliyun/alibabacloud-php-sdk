<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeTagResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The remarks.
     *
     * @example Slow SQL queries of offline synchronization. No optimization is required.
     *
     * @var string
     */
    public $comments;

    /**
     * @description The SQL template ID.
     *
     * @example 651b56fe9418d48edb8fdf0980ec****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The SQL tags. Multiple tags are separated by commas (,).
     *
     * @example DAS_IN_PLAN,DAS_NOT_IMPORTANT
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'comments' => 'Comments',
        'sqlId'    => 'SqlId',
        'tags'     => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
