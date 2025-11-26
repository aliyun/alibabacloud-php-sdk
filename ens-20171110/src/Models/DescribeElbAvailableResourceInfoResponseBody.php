<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeElbAvailableResourceInfoResponseBody\elbAvailableResourceInfo;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->elbAvailableResourceInfo)) {
            Model::validateArray($this->elbAvailableResourceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elbAvailableResourceInfo) {
            if (\is_array($this->elbAvailableResourceInfo)) {
                $res['ElbAvailableResourceInfo'] = [];
                $n1 = 0;
                foreach ($this->elbAvailableResourceInfo as $item1) {
                    $res['ElbAvailableResourceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ElbAvailableResourceInfo'])) {
            if (!empty($map['ElbAvailableResourceInfo'])) {
                $model->elbAvailableResourceInfo = [];
                $n1 = 0;
                foreach ($map['ElbAvailableResourceInfo'] as $item1) {
                    $model->elbAvailableResourceInfo[$n1] = elbAvailableResourceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
