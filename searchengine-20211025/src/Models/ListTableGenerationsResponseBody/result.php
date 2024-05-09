<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListTableGenerationsResponseBody;

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
    protected $_name = [
        'generationId' => 'generationId',
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

        return $model;
    }
}
