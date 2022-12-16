<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataTaskRequest extends Model
{
    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example et_cn_0oyg09o96ib40****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'taskId'      => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDataTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
