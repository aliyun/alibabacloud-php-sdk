<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveTopDomainsByFlowResponse\topDomains\topDomain;
use AlibabaCloud\Tea\Model;

class topDomains extends Model
{
    /**
     * @var topDomain[]
     */
    public $topDomain;
    protected $_name = [
        'topDomain' => 'TopDomain',
    ];

    public function validate()
    {
        Model::validateRequired('topDomain', $this->topDomain, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topDomain) {
            $res['TopDomain'] = [];
            if (null !== $this->topDomain && \is_array($this->topDomain)) {
                $n = 0;
                foreach ($this->topDomain as $item) {
                    $res['TopDomain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopDomain'])) {
            if (!empty($map['TopDomain'])) {
                $model->topDomain = [];
                $n                = 0;
                foreach ($map['TopDomain'] as $item) {
                    $model->topDomain[$n++] = null !== $item ? topDomain::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
