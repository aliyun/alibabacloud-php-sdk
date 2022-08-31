<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainsBySourceResponseBody;

use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData;
use AlibabaCloud\Tea\Model;

class domainsList extends Model
{
    /**
     * @var domainsData[]
     */
    public $domainsData;
    protected $_name = [
        'domainsData' => 'DomainsData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainsData) {
            $res['DomainsData'] = [];
            if (null !== $this->domainsData && \is_array($this->domainsData)) {
                $n = 0;
                foreach ($this->domainsData as $item) {
                    $res['DomainsData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainsData'])) {
            if (!empty($map['DomainsData'])) {
                $model->domainsData = [];
                $n                  = 0;
                foreach ($map['DomainsData'] as $item) {
                    $model->domainsData[$n++] = null !== $item ? domainsData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
