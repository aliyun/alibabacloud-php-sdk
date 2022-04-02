<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetQueueConfResponseBody\queuesConf;
use AlibabaCloud\Tea\Model;

class GetQueueConfResponseBody extends Model
{
    /**
     * @var queuesConf[]
     */
    public $queuesConf;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'queuesConf' => 'QueuesConf',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queuesConf) {
            $res['QueuesConf'] = [];
            if (null !== $this->queuesConf && \is_array($this->queuesConf)) {
                $n = 0;
                foreach ($this->queuesConf as $item) {
                    $res['QueuesConf'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueueConfResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueuesConf'])) {
            if (!empty($map['QueuesConf'])) {
                $model->queuesConf = [];
                $n                 = 0;
                foreach ($map['QueuesConf'] as $item) {
                    $model->queuesConf[$n++] = null !== $item ? queuesConf::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
