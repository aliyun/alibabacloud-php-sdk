<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeStatusResponseBody\status;
use AlibabaCloud\Tea\Model;

class ListPipelineRunNodeStatusResponseBody extends Model
{
    /**
     * @example 473469C7-****-****-****-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @var status[]
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = [];
            if (null !== $this->status && \is_array($this->status)) {
                $n = 0;
                foreach ($this->status as $item) {
                    $res['Status'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRunNodeStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n             = 0;
                foreach ($map['Status'] as $item) {
                    $model->status[$n++] = null !== $item ? status::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
