<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupFileResponseBody\data;
use AlibabaCloud\Tea\Model;

class BackupFileResponseBody extends Model
{
    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @description The objects that are returned.
     *
     * @example 6C8439B9-7DBF-57F4-92AE-55A9B9D3****
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 6C8439B9-7DBF-57F4-92AE-55A9B9D3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The batch task ID.
     *
     * @example t-22ex666a5mco5****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'count'     => 'Count',
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

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
     * @return BackupFileResponseBody
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
                $n           = 0;
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
