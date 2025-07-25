<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class systemDiskCategories extends Model
{
    /**
     * @var string[]
     */
    public $supportedSystemDiskCategory;
    protected $_name = [
        'supportedSystemDiskCategory' => 'supportedSystemDiskCategory',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedSystemDiskCategory) {
            $res['supportedSystemDiskCategory'] = $this->supportedSystemDiskCategory;
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
        if (isset($map['supportedSystemDiskCategory'])) {
            if (!empty($map['supportedSystemDiskCategory'])) {
                $model->supportedSystemDiskCategory = $map['supportedSystemDiskCategory'];
            }
        }

        return $model;
    }
}
