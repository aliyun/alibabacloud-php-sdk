<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class OpenDatasetProxyAppendDataRequest extends Model
{
    /**
     * @var string[][]
     */
    public $dataMeta;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $UUID;
    protected $_name = [
        'dataMeta' => 'DataMeta',
        'taskId'   => 'TaskId',
        'traceId'  => 'TraceId',
        'UUID'     => 'UUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataMeta) {
            $res['DataMeta'] = $this->dataMeta;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenDatasetProxyAppendDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataMeta'])) {
            if (!empty($map['DataMeta'])) {
                $model->dataMeta = $map['DataMeta'];
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        return $model;
    }
}
