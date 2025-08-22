<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceResponseBody\domainInfo\domainList;

class domainInfo extends Model
{
    /**
     * @var domainList[]
     */
    public $domainList;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'domainList' => 'DomainList',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->domainList)) {
            Model::validateArray($this->domainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainList) {
            if (\is_array($this->domainList)) {
                $res['DomainList'] = [];
                $n1 = 0;
                foreach ($this->domainList as $item1) {
                    $res['DomainList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = [];
                $n1 = 0;
                foreach ($map['DomainList'] as $item1) {
                    $model->domainList[$n1] = domainList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
