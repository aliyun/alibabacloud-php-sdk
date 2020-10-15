<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponse\ensRegionIdResources\ensRegionIdResource;
use AlibabaCloud\Tea\Model;

class ensRegionIdResources extends Model
{
    /**
     * @var ensRegionIdResource[]
     */
    public $ensRegionIdResource;
    protected $_name = [
        'ensRegionIdResource' => 'EnsRegionIdResource',
    ];

    public function validate()
    {
        Model::validateRequired('ensRegionIdResource', $this->ensRegionIdResource, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionIdResource) {
            $res['EnsRegionIdResource'] = [];
            if (null !== $this->ensRegionIdResource && \is_array($this->ensRegionIdResource)) {
                $n = 0;
                foreach ($this->ensRegionIdResource as $item) {
                    $res['EnsRegionIdResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensRegionIdResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionIdResource'])) {
            if (!empty($map['EnsRegionIdResource'])) {
                $model->ensRegionIdResource = [];
                $n                          = 0;
                foreach ($map['EnsRegionIdResource'] as $item) {
                    $model->ensRegionIdResource[$n++] = null !== $item ? ensRegionIdResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
