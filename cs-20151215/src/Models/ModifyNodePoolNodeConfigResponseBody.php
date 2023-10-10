<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyNodePoolNodeConfigResponseBody extends Model
{
    /**
     * @description The node pool ID.
     *
     * @example np737c3ac1ac684703b9e10673aa2c****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description The request ID.
     *
     * @example D7631D83-6E98-1949-B665-766A62xxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example T-5fd211e924e1d00787xxxxxx
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'nodepoolId' => 'nodepool_id',
        'requestId'  => 'request_id',
        'taskId'     => 'task_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNodePoolNodeConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
