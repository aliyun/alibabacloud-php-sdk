<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The category of the system disk. You must specify this parameter only when you upgrade a non-I/O optimized instance of a retired instance type to an I/O optimized instance of an available instance type. For more information about instance types, see [Instance families](~~25378~~) and [Retired instance types](~~55263~~).
     *
     * Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *
     * This parameter is empty by default.
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;
    protected $_name = [
        'category' => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
