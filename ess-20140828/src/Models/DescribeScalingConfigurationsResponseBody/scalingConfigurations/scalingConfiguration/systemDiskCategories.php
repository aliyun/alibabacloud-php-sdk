<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration;

use AlibabaCloud\Tea\Model;

class systemDiskCategories extends Model
{
    /**
     * @var string[]
     */
    public $systemDiskCategory;
    protected $_name = [
        'systemDiskCategory' => 'SystemDiskCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDiskCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDiskCategory'])) {
            if (!empty($map['SystemDiskCategory'])) {
                $model->systemDiskCategory = $map['SystemDiskCategory'];
            }
        }

        return $model;
    }
}
