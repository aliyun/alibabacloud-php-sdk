<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeElbAvailableResourceInfoResponseBody\elbAvailableResourceInfo;
use AlibabaCloud\Tea\Model;

class DescribeElbAvailableResourceInfoResponseBody extends Model
{
    /**
     * @var elbAvailableResourceInfo[]
     */
    public $elbAvailableResourceInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elbAvailableResourceInfo' => 'ElbAvailableResourceInfo',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elbAvailableResourceInfo) {
            $res['ElbAvailableResourceInfo'] = [];
            if (null !== $this->elbAvailableResourceInfo && \is_array($this->elbAvailableResourceInfo)) {
                $n = 0;
                foreach ($this->elbAvailableResourceInfo as $item) {
                    $res['ElbAvailableResourceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeElbAvailableResourceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElbAvailableResourceInfo'])) {
            if (!empty($map['ElbAvailableResourceInfo'])) {
                $model->elbAvailableResourceInfo = [];
                $n                               = 0;
                foreach ($map['ElbAvailableResourceInfo'] as $item) {
                    $model->elbAvailableResourceInfo[$n++] = null !== $item ? elbAvailableResourceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
