<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody\clientIpList;

class DescribeDomainTopClientIpVisitResponseBody extends Model
{
    /**
     * @var clientIpList[]
     */
    public $clientIpList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientIpList' => 'ClientIpList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clientIpList)) {
            Model::validateArray($this->clientIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIpList) {
            if (\is_array($this->clientIpList)) {
                $res['ClientIpList'] = [];
                $n1 = 0;
                foreach ($this->clientIpList as $item1) {
                    $res['ClientIpList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = [];
                $n1 = 0;
                foreach ($map['ClientIpList'] as $item1) {
                    $model->clientIpList[$n1] = clientIpList::fromMap($item1);
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
