<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketResponseBody\instanceConnectionModels;
use AlibabaCloud\Tea\Model;

class BatchGetAcpConnectionTicketResponseBody extends Model
{
    /**
     * @var instanceConnectionModels[]
     */
    public $instanceConnectionModels;

    /**
     * @description Id of the request
     *
     * @example 7B9EFA4F-4305-5968-BAEE-BD8B8DE5****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceConnectionModels' => 'InstanceConnectionModels',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceConnectionModels) {
            $res['InstanceConnectionModels'] = [];
            if (null !== $this->instanceConnectionModels && \is_array($this->instanceConnectionModels)) {
                $n = 0;
                foreach ($this->instanceConnectionModels as $item) {
                    $res['InstanceConnectionModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetAcpConnectionTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceConnectionModels'])) {
            if (!empty($map['InstanceConnectionModels'])) {
                $model->instanceConnectionModels = [];
                $n                               = 0;
                foreach ($map['InstanceConnectionModels'] as $item) {
                    $model->instanceConnectionModels[$n++] = null !== $item ? instanceConnectionModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
