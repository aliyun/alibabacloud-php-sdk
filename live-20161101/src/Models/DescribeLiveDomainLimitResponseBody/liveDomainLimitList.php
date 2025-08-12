<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody\liveDomainLimitList\liveDomainLimit;

class liveDomainLimitList extends Model
{
    /**
     * @var liveDomainLimit[]
     */
    public $liveDomainLimit;
    protected $_name = [
        'liveDomainLimit' => 'LiveDomainLimit',
    ];

    public function validate()
    {
        if (\is_array($this->liveDomainLimit)) {
            Model::validateArray($this->liveDomainLimit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveDomainLimit) {
            if (\is_array($this->liveDomainLimit)) {
                $res['LiveDomainLimit'] = [];
                $n1 = 0;
                foreach ($this->liveDomainLimit as $item1) {
                    $res['LiveDomainLimit'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveDomainLimit'])) {
            if (!empty($map['LiveDomainLimit'])) {
                $model->liveDomainLimit = [];
                $n1 = 0;
                foreach ($map['LiveDomainLimit'] as $item1) {
                    $model->liveDomainLimit[$n1] = liveDomainLimit::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
