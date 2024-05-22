<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class QuerySmarttagJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 88c6ca184c0e47098a5b665e2****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example {"labelResultType":"auto"}
     *
     * @var string
     */
    public $params;
    protected $_name = [
        'jobId'  => 'JobId',
        'params' => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmarttagJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
