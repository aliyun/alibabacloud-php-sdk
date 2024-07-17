<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListIndexRecoverRecordsResponseBody extends Model
{
    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $desc;

    /**
     * @description The time when the index version was published.
     *
     * @example 2024-06-07 16:43:00
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The ID of the full index version.
     *
     * @example 1708674867
     *
     * @var string
     */
    public $generationId;
    protected $_name = [
        'desc'         => 'desc',
        'finishedTime' => 'finishedTime',
        'generationId' => 'generationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->finishedTime) {
            $res['finishedTime'] = $this->finishedTime;
        }
        if (null !== $this->generationId) {
            $res['generationId'] = $this->generationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIndexRecoverRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['finishedTime'])) {
            $model->finishedTime = $map['finishedTime'];
        }
        if (isset($map['generationId'])) {
            $model->generationId = $map['generationId'];
        }

        return $model;
    }
}
