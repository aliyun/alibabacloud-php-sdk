<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData;

use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData\domainInfos\domainInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainInfo) {
            $res['domainInfo'] = [];
            if (null !== $this->domainInfo && \is_array($this->domainInfo)) {
                $n = 0;
                foreach ($this->domainInfo as $item) {
                    $res['domainInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainInfo'])) {
            if (!empty($map['domainInfo'])) {
                $model->domainInfo = [];
                $n                 = 0;
                foreach ($map['domainInfo'] as $item) {
                    $model->domainInfo[$n++] = null !== $item ? domainInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
