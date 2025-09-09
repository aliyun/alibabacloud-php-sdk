<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains\slbSubDomain;

class slbSubDomains extends Model
{
    /**
     * @var slbSubDomain[]
     */
    public $slbSubDomain;
    protected $_name = [
        'slbSubDomain' => 'SlbSubDomain',
    ];

    public function validate()
    {
        if (\is_array($this->slbSubDomain)) {
            Model::validateArray($this->slbSubDomain);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slbSubDomain) {
            if (\is_array($this->slbSubDomain)) {
                $res['SlbSubDomain'] = [];
                $n1 = 0;
                foreach ($this->slbSubDomain as $item1) {
                    $res['SlbSubDomain'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlbSubDomain'])) {
            if (!empty($map['SlbSubDomain'])) {
                $model->slbSubDomain = [];
                $n1 = 0;
                foreach ($map['SlbSubDomain'] as $item1) {
                    $model->slbSubDomain[$n1] = slbSubDomain::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
