<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryBatchRegistAnonymousTbAccountResultRequest extends Model
{
    /**
     * @example 10418*******
     *
     * @var string
     */
    public $batchId;

    /**
     * @example LMALL20210125****
     *
     * @var string
     */
    public $bizId;
    protected $_name = [
        'batchId' => 'BatchId',
        'bizId'   => 'BizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBatchRegistAnonymousTbAccountResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}
