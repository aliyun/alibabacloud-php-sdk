<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody\domainExtensions\domainExtension;

class domainExtensions extends Model
{
    /**
     * @var domainExtension[]
     */
    public $domainExtension;
    protected $_name = [
        'domainExtension' => 'DomainExtension',
    ];

    public function validate()
    {
        if (\is_array($this->domainExtension)) {
            Model::validateArray($this->domainExtension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainExtension) {
            if (\is_array($this->domainExtension)) {
                $res['DomainExtension'] = [];
                $n1 = 0;
                foreach ($this->domainExtension as $item1) {
                    $res['DomainExtension'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DomainExtension'])) {
            if (!empty($map['DomainExtension'])) {
                $model->domainExtension = [];
                $n1 = 0;
                foreach ($map['DomainExtension'] as $item1) {
                    $model->domainExtension[$n1] = domainExtension::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
