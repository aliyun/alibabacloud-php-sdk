<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAccessModeResponseBody\domainModeList;

class DescribeDomainAccessModeResponseBody extends Model
{
    /**
     * @var domainModeList[]
     */
    public $domainModeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainModeList' => 'DomainModeList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainModeList)) {
            Model::validateArray($this->domainModeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainModeList) {
            if (\is_array($this->domainModeList)) {
                $res['DomainModeList'] = [];
                $n1 = 0;
                foreach ($this->domainModeList as $item1) {
                    $res['DomainModeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainModeList'])) {
            if (!empty($map['DomainModeList'])) {
                $model->domainModeList = [];
                $n1 = 0;
                foreach ($map['DomainModeList'] as $item1) {
                    $model->domainModeList[$n1++] = domainModeList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
