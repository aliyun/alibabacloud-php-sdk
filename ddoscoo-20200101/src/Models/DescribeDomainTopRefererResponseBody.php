<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopRefererResponseBody\domainTopReferer;

class DescribeDomainTopRefererResponseBody extends Model
{
    /**
     * @var domainTopReferer[]
     */
    public $domainTopReferer;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTopReferer' => 'DomainTopReferer',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainTopReferer)) {
            Model::validateArray($this->domainTopReferer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainTopReferer) {
            if (\is_array($this->domainTopReferer)) {
                $res['DomainTopReferer'] = [];
                $n1 = 0;
                foreach ($this->domainTopReferer as $item1) {
                    $res['DomainTopReferer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainTopReferer'])) {
            if (!empty($map['DomainTopReferer'])) {
                $model->domainTopReferer = [];
                $n1 = 0;
                foreach ($map['DomainTopReferer'] as $item1) {
                    $model->domainTopReferer[$n1] = domainTopReferer::fromMap($item1);
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
