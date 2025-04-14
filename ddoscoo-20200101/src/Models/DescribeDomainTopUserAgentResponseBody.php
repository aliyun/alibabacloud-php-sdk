<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopUserAgentResponseBody\domainTopUa;

class DescribeDomainTopUserAgentResponseBody extends Model
{
    /**
     * @var domainTopUa[]
     */
    public $domainTopUa;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTopUa' => 'DomainTopUa',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainTopUa)) {
            Model::validateArray($this->domainTopUa);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainTopUa) {
            if (\is_array($this->domainTopUa)) {
                $res['DomainTopUa'] = [];
                $n1 = 0;
                foreach ($this->domainTopUa as $item1) {
                    $res['DomainTopUa'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainTopUa'])) {
            if (!empty($map['DomainTopUa'])) {
                $model->domainTopUa = [];
                $n1 = 0;
                foreach ($map['DomainTopUa'] as $item1) {
                    $model->domainTopUa[$n1++] = domainTopUa::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
