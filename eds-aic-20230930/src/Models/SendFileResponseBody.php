<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\SendFileResponseBody\data;
use AlibabaCloud\Tea\Model;

class SendFileResponseBody extends Model
{
    /**
     * @description The objects that are returned.
     *
     * @example 425F351C-3F8E-5218-A520-B6311D0D****
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The ID of the request. If the request fails, share this ID with technical support to help diagnose the issue.
     *
     * @example 425F351C-3F8E-5218-A520-B6311D0D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the batch task.
     *
     * @example t-ehs0yoedj0xe9****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return SendFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
