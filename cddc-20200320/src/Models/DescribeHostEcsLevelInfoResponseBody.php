<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody\hostEcsLevelInfos;
use AlibabaCloud\Tea\Model;

class DescribeHostEcsLevelInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hostEcsLevelInfos[]
     */
    public $hostEcsLevelInfos;
    protected $_name = [
        'requestId'         => 'RequestId',
        'hostEcsLevelInfos' => 'HostEcsLevelInfos',
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
        if (null !== $this->hostEcsLevelInfos) {
            $res['HostEcsLevelInfos'] = [];
            if (null !== $this->hostEcsLevelInfos && \is_array($this->hostEcsLevelInfos)) {
                $n = 0;
                foreach ($this->hostEcsLevelInfos as $item) {
                    $res['HostEcsLevelInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostEcsLevelInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HostEcsLevelInfos'])) {
            if (!empty($map['HostEcsLevelInfos'])) {
                $model->hostEcsLevelInfos = [];
                $n                        = 0;
                foreach ($map['HostEcsLevelInfos'] as $item) {
                    $model->hostEcsLevelInfos[$n++] = null !== $item ? hostEcsLevelInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
