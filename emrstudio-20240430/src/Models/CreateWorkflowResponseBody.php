<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\SDK\EmrStudio\V20240430\Models\CreateWorkflowResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateWorkflowResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @description Id of the request
     *
     * @example 9E3A7161-EB7B-172B-8D18-FFB06BA38***
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'data',
        'requestId' => 'requestId',
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkflowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
