<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class SubmitIndexJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 79c0aly8zw
     *
     * @var string
     */
    public $indexId;
    protected $_name = [
        'indexId' => 'IndexId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitIndexJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        return $model;
    }
}
