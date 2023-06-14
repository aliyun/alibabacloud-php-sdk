<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyEnableStatusResponseBody\statusModels;
use AlibabaCloud\Tea\Model;

class GetPolicyEnableStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 6C8DF1B1-C65F-5D3A-9FDA-26A4683BB36B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the Tag Policy feature.
     *
     * @var statusModels[]
     */
    public $statusModels;
    protected $_name = [
        'requestId'    => 'RequestId',
        'statusModels' => 'StatusModels',
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
        if (null !== $this->statusModels) {
            $res['StatusModels'] = [];
            if (null !== $this->statusModels && \is_array($this->statusModels)) {
                $n = 0;
                foreach ($this->statusModels as $item) {
                    $res['StatusModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyEnableStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusModels'])) {
            if (!empty($map['StatusModels'])) {
                $model->statusModels = [];
                $n                   = 0;
                foreach ($map['StatusModels'] as $item) {
                    $model->statusModels[$n++] = null !== $item ? statusModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
