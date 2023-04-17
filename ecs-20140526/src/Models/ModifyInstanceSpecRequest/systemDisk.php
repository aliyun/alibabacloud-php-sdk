<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The new category of the system disk. This parameter is valid only when you upgrade an instance from a retired instance type to an available instance type or when you upgrade a non-I/O optimized instance to an I/O optimized instance. For more information, see [Retired instance types](~~55263~~) and [Instance families](~~25378~~). Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *
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
