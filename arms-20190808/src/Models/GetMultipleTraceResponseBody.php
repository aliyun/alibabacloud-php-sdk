<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponseBody\multiCallChainInfos;
use AlibabaCloud\Tea\Model;

class GetMultipleTraceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var multiCallChainInfos[]
     */
    public $multiCallChainInfos;
    protected $_name = [
        'requestId'           => 'RequestId',
        'multiCallChainInfos' => 'MultiCallChainInfos',
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
        if (null !== $this->multiCallChainInfos) {
            $res['MultiCallChainInfos'] = [];
            if (null !== $this->multiCallChainInfos && \is_array($this->multiCallChainInfos)) {
                $n = 0;
                foreach ($this->multiCallChainInfos as $item) {
                    $res['MultiCallChainInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultipleTraceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MultiCallChainInfos'])) {
            if (!empty($map['MultiCallChainInfos'])) {
                $model->multiCallChainInfos = [];
                $n                          = 0;
                foreach ($map['MultiCallChainInfos'] as $item) {
                    $model->multiCallChainInfos[$n++] = null !== $item ? multiCallChainInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
