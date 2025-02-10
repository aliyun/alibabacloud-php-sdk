<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains\slbSubDomain;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains\slbSubDomain\lineAlgorithms\lineAlgorithm;

class lineAlgorithms extends Model
{
    /**
     * @var lineAlgorithm[]
     */
    public $lineAlgorithm;
    protected $_name = [
        'lineAlgorithm' => 'LineAlgorithm',
    ];

    public function validate()
    {
        if (\is_array($this->lineAlgorithm)) {
            Model::validateArray($this->lineAlgorithm);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lineAlgorithm) {
            if (\is_array($this->lineAlgorithm)) {
                $res['LineAlgorithm'] = [];
                $n1                   = 0;
                foreach ($this->lineAlgorithm as $item1) {
                    $res['LineAlgorithm'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LineAlgorithm'])) {
            if (!empty($map['LineAlgorithm'])) {
                $model->lineAlgorithm = [];
                $n1                   = 0;
                foreach ($map['LineAlgorithm'] as $item1) {
                    $model->lineAlgorithm[$n1++] = lineAlgorithm::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
