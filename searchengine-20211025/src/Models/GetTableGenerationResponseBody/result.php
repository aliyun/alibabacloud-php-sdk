<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableGenerationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description generationId
     *
     * @example 1708674867
     *
     * @var int
     */
    public $generationId;

    /**
     * @description starting, building, ready, stopped, failed
     *
     * @example ready
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'generationId' => 'generationId',
        'status'       => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generationId) {
            $res['generationId'] = $this->generationId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generationId'])) {
            $model->generationId = $map['generationId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
