<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileResponseBody\data;
use AlibabaCloud\Tea\Model;

class RecoveryFileResponseBody extends Model
{
    /**
     * @description The number of restored instances.
     *
     * @example 97
     *
     * @var int
     */
    public $count;

    /**
     * @description The backup file that is restored.
     *
     * @example 6AD56E39-430B-5401-AB4A-7B086454****
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 6AD56E39-430B-5401-AB4A-7B086454****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the batch task.
     *
     * @example t-5prhfo7wv1gjx****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'count' => 'Count',
        'data' => 'Data',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoveryFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
