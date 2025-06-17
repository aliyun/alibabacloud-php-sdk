<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData;

use AlibabaCloud\Dara\Model;

class domains extends Model
{
    /**
     * @var string[]
     */
    public $domainNames;
    protected $_name = [
        'domainNames' => 'domainNames',
    ];

    public function validate()
    {
        if (\is_array($this->domainNames)) {
            Model::validateArray($this->domainNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNames) {
            if (\is_array($this->domainNames)) {
                $res['domainNames'] = [];
                $n1 = 0;
                foreach ($this->domainNames as $item1) {
                    $res['domainNames'][$n1] = $item1;
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
        if (isset($map['domainNames'])) {
            if (!empty($map['domainNames'])) {
                $model->domainNames = [];
                $n1 = 0;
                foreach ($map['domainNames'] as $item1) {
                    $model->domainNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
