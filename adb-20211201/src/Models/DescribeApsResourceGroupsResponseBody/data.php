<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponseBody\data\resourceGroups;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The queried resource groups.
     *
     * @var resourceGroups[]
     */
    public $resourceGroups;

    /**
     * @description The step size of resources. Unit: AnalyticDB compute units (ACUs).
     *
     *   If the value of GroupType is **Interactive**, 16 is returned.
     *   If the value of GroupType is **Job**, 8 is returned.
     *
     * @example 8
     *
     * @var int
     */
    public $step;
    protected $_name = [
        'resourceGroups' => 'ResourceGroups',
        'step'           => 'Step',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = [];
            if (null !== $this->resourceGroups && \is_array($this->resourceGroups)) {
                $n = 0;
                foreach ($this->resourceGroups as $item) {
                    $res['ResourceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = [];
                $n                     = 0;
                foreach ($map['ResourceGroups'] as $item) {
                    $model->resourceGroups[$n++] = null !== $item ? resourceGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
