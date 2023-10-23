<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceResponseBody\domainInfo\domainList;
use AlibabaCloud\Tea\Model;

class domainInfo extends Model
{
    /**
     * @var domainList[]
     */
    public $domainList;

    /**
     * @example example.com
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'domainList' => 'DomainList',
        'source'     => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainList) {
            $res['DomainList'] = [];
            if (null !== $this->domainList && \is_array($this->domainList)) {
                $n = 0;
                foreach ($this->domainList as $item) {
                    $res['DomainList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = [];
                $n                 = 0;
                foreach ($map['DomainList'] as $item) {
                    $model->domainList[$n++] = null !== $item ? domainList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
