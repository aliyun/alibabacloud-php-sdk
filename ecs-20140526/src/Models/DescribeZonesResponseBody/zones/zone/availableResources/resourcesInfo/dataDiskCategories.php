<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class dataDiskCategories extends Model
{
    /**
     * @var string[]
     */
    public $supportedDataDiskCategory;
    protected $_name = [
        'supportedDataDiskCategory' => 'supportedDataDiskCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedDataDiskCategory) {
            $res['supportedDataDiskCategory'] = $this->supportedDataDiskCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDiskCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['supportedDataDiskCategory'])) {
            if (!empty($map['supportedDataDiskCategory'])) {
                $model->supportedDataDiskCategory = $map['supportedDataDiskCategory'];
            }
        }

        return $model;
    }
}
