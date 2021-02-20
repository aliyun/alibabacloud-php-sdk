<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class ensRegions extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponseBody\ensRegions\ensRegions[]
     */
    public $ensRegions;
    protected $_name = [
        'ensRegions' => 'EnsRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegions) {
            $res['EnsRegions'] = [];
            if (null !== $this->ensRegions && \is_array($this->ensRegions)) {
                $n = 0;
                foreach ($this->ensRegions as $item) {
                    $res['EnsRegions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensRegions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegions'])) {
            if (!empty($map['EnsRegions'])) {
                $model->ensRegions = [];
                $n                 = 0;
                foreach ($map['EnsRegions'] as $item) {
                    $model->ensRegions[$n++] = null !== $item ? \AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponseBody\ensRegions\ensRegions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
