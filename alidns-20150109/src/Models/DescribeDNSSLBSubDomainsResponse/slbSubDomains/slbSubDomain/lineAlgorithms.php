<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse\slbSubDomains\slbSubDomain;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse\slbSubDomains\slbSubDomain\lineAlgorithms\lineAlgorithm;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('lineAlgorithm', $this->lineAlgorithm, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineAlgorithm) {
            $res['LineAlgorithm'] = [];
            if (null !== $this->lineAlgorithm && \is_array($this->lineAlgorithm)) {
                $n = 0;
                foreach ($this->lineAlgorithm as $item) {
                    $res['LineAlgorithm'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lineAlgorithms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineAlgorithm'])) {
            if (!empty($map['LineAlgorithm'])) {
                $model->lineAlgorithm = [];
                $n                    = 0;
                foreach ($map['LineAlgorithm'] as $item) {
                    $model->lineAlgorithm[$n++] = null !== $item ? lineAlgorithm::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
