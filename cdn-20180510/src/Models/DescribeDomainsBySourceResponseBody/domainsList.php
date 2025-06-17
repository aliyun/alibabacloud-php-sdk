<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList\domainsData;

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
        if (\is_array($this->domainsData)) {
            Model::validateArray($this->domainsData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainsData) {
            if (\is_array($this->domainsData)) {
                $res['DomainsData'] = [];
                $n1 = 0;
                foreach ($this->domainsData as $item1) {
                    $res['DomainsData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainsData'])) {
            if (!empty($map['DomainsData'])) {
                $model->domainsData = [];
                $n1 = 0;
                foreach ($map['DomainsData'] as $item1) {
                    $model->domainsData[$n1] = domainsData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
