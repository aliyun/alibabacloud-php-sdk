<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody\hostEcsLevelInfos;

class DescribeHostEcsLevelInfoResponseBody extends Model
{
    /**
     * @var hostEcsLevelInfos[]
     */
    public $hostEcsLevelInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostEcsLevelInfos' => 'HostEcsLevelInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->hostEcsLevelInfos)) {
            Model::validateArray($this->hostEcsLevelInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostEcsLevelInfos) {
            if (\is_array($this->hostEcsLevelInfos)) {
                $res['HostEcsLevelInfos'] = [];
                $n1 = 0;
                foreach ($this->hostEcsLevelInfos as $item1) {
                    $res['HostEcsLevelInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostEcsLevelInfos'])) {
            if (!empty($map['HostEcsLevelInfos'])) {
                $model->hostEcsLevelInfos = [];
                $n1 = 0;
                foreach ($map['HostEcsLevelInfos'] as $item1) {
                    $model->hostEcsLevelInfos[$n1++] = hostEcsLevelInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
