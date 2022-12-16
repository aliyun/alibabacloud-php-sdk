<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class CancelTaskRequest extends Model
{
    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example MigrateData
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'clientToken' => 'clientToken',
        'taskType'    => 'taskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
