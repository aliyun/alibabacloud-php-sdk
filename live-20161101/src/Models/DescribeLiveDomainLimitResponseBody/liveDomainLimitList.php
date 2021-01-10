<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody\liveDomainLimitList\liveDomainLimit;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveDomainLimit) {
            $res['LiveDomainLimit'] = [];
            if (null !== $this->liveDomainLimit && \is_array($this->liveDomainLimit)) {
                $n = 0;
                foreach ($this->liveDomainLimit as $item) {
                    $res['LiveDomainLimit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveDomainLimitList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveDomainLimit'])) {
            if (!empty($map['LiveDomainLimit'])) {
                $model->liveDomainLimit = [];
                $n                      = 0;
                foreach ($map['LiveDomainLimit'] as $item) {
                    $model->liveDomainLimit[$n++] = null !== $item ? liveDomainLimit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
