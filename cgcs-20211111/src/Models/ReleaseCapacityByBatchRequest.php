<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ReleaseCapacityByBatchRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 726573XXXX
     *
     * @var string
     */
    public $resBatchId;
    protected $_name = [
        'resBatchId' => 'ResBatchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resBatchId) {
            $res['ResBatchId'] = $this->resBatchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseCapacityByBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResBatchId'])) {
            $model->resBatchId = $map['ResBatchId'];
        }

        return $model;
    }
}
