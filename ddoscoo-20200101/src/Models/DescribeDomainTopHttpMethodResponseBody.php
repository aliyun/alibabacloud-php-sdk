<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopHttpMethodResponseBody\domainTopMethod;

class DescribeDomainTopHttpMethodResponseBody extends Model
{
    /**
     * @var domainTopMethod[]
     */
    public $domainTopMethod;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTopMethod' => 'DomainTopMethod',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainTopMethod)) {
            Model::validateArray($this->domainTopMethod);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainTopMethod) {
            if (\is_array($this->domainTopMethod)) {
                $res['DomainTopMethod'] = [];
                $n1 = 0;
                foreach ($this->domainTopMethod as $item1) {
                    $res['DomainTopMethod'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainTopMethod'])) {
            if (!empty($map['DomainTopMethod'])) {
                $model->domainTopMethod = [];
                $n1 = 0;
                foreach ($map['DomainTopMethod'] as $item1) {
                    $model->domainTopMethod[$n1++] = domainTopMethod::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
