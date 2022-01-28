<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\ensRegionIdsExtends\ensRegionId;
use AlibabaCloud\Tea\Model;

class ensRegionIdsExtends extends Model
{
    /**
     * @var ensRegionId[]
     */
    public $ensRegionId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = [];
            if (null !== $this->ensRegionId && \is_array($this->ensRegionId)) {
                $n = 0;
                foreach ($this->ensRegionId as $item) {
                    $res['EnsRegionId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensRegionIdsExtends
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            if (!empty($map['EnsRegionId'])) {
                $model->ensRegionId = [];
                $n                  = 0;
                foreach ($map['EnsRegionId'] as $item) {
                    $model->ensRegionId[$n++] = null !== $item ? ensRegionId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
