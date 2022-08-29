<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayDetailResponseBody\baseInfos;
use AlibabaCloud\Tea\Model;

class DescribePlayDetailResponseBody extends Model
{
    /**
     * @var baseInfos[]
     */
    public $baseInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baseInfos' => 'BaseInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseInfos) {
            $res['BaseInfos'] = [];
            if (null !== $this->baseInfos && \is_array($this->baseInfos)) {
                $n = 0;
                foreach ($this->baseInfos as $item) {
                    $res['BaseInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePlayDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseInfos'])) {
            if (!empty($map['BaseInfos'])) {
                $model->baseInfos = [];
                $n                = 0;
                foreach ($map['BaseInfos'] as $item) {
                    $model->baseInfos[$n++] = null !== $item ? baseInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
