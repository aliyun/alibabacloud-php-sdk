<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedResourceAdvisorResponseBody;

use AlibabaCloud\Tea\Model;

class resourceAdvisors extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedResourceAdvisorResponseBody\resourceAdvisors\resourceAdvisors[]
     */
    public $resourceAdvisors;
    protected $_name = [
        'resourceAdvisors' => 'ResourceAdvisors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceAdvisors) {
            $res['ResourceAdvisors'] = [];
            if (null !== $this->resourceAdvisors && \is_array($this->resourceAdvisors)) {
                $n = 0;
                foreach ($this->resourceAdvisors as $item) {
                    $res['ResourceAdvisors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceAdvisors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceAdvisors'])) {
            if (!empty($map['ResourceAdvisors'])) {
                $model->resourceAdvisors = [];
                $n                       = 0;
                foreach ($map['ResourceAdvisors'] as $item) {
                    $model->resourceAdvisors[$n++] = null !== $item ? \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedResourceAdvisorResponseBody\resourceAdvisors\resourceAdvisors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
