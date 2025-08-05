<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties;

use AlibabaCloud\Tea\Model;

class externalProjectProperties extends Model
{
    /**
     * @description Indicates whether the external project is an external project for [data lakehouse solution 2.0](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/lake-warehouse-integrated-2-0-use-guide).
     *
     * @example true
     *
     * @var string
     */
    public $isExternalCatalogBound;
    protected $_name = [
        'isExternalCatalogBound' => 'isExternalCatalogBound',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isExternalCatalogBound) {
            $res['isExternalCatalogBound'] = $this->isExternalCatalogBound;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return externalProjectProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isExternalCatalogBound'])) {
            $model->isExternalCatalogBound = $map['isExternalCatalogBound'];
        }

        return $model;
    }
}
