<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchDescribeCdnIpInfoResponseBody\ipInfoList;

class BatchDescribeCdnIpInfoResponseBody extends Model
{
    /**
     * @var ipInfoList[]
     */
    public $ipInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipInfoList' => 'IpInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ipInfoList)) {
            Model::validateArray($this->ipInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipInfoList) {
            if (\is_array($this->ipInfoList)) {
                $res['IpInfoList'] = [];
                $n1 = 0;
                foreach ($this->ipInfoList as $item1) {
                    $res['IpInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IpInfoList'])) {
            if (!empty($map['IpInfoList'])) {
                $model->ipInfoList = [];
                $n1 = 0;
                foreach ($map['IpInfoList'] as $item1) {
                    $model->ipInfoList[$n1] = ipInfoList::fromMap($item1);
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
