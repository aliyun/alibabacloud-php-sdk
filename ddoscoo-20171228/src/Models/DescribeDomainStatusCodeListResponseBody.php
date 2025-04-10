<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainStatusCodeListResponseBody\statusCodeList;

class DescribeDomainStatusCodeListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statusCodeList[]
     */
    public $statusCodeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'statusCodeList' => 'StatusCodeList',
    ];

    public function validate()
    {
        if (\is_array($this->statusCodeList)) {
            Model::validateArray($this->statusCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statusCodeList) {
            if (\is_array($this->statusCodeList)) {
                $res['StatusCodeList'] = [];
                $n1 = 0;
                foreach ($this->statusCodeList as $item1) {
                    $res['StatusCodeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StatusCodeList'])) {
            if (!empty($map['StatusCodeList'])) {
                $model->statusCodeList = [];
                $n1 = 0;
                foreach ($map['StatusCodeList'] as $item1) {
                    $model->statusCodeList[$n1++] = statusCodeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
