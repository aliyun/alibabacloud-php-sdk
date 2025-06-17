<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domainInfos\domainInfo;

class domainInfos extends Model
{
    /**
     * @var domainInfo[]
     */
    public $domainInfo;
    protected $_name = [
        'domainInfo' => 'domainInfo',
    ];

    public function validate()
    {
        if (\is_array($this->domainInfo)) {
            Model::validateArray($this->domainInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainInfo) {
            if (\is_array($this->domainInfo)) {
                $res['domainInfo'] = [];
                $n1 = 0;
                foreach ($this->domainInfo as $item1) {
                    $res['domainInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['domainInfo'])) {
            if (!empty($map['domainInfo'])) {
                $model->domainInfo = [];
                $n1 = 0;
                foreach ($map['domainInfo'] as $item1) {
                    $model->domainInfo[$n1] = domainInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
