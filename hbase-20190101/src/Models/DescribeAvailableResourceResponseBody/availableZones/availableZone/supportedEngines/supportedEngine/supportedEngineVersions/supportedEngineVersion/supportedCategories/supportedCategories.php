<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes;
use AlibabaCloud\Tea\Model;

class supportedCategories extends Model
{
    /**
     * @example cluster
     *
     * @var string
     */
    public $category;

    /**
     * @var supportedStorageTypes
     */
    public $supportedStorageTypes;
    protected $_name = [
        'category'              => 'Category',
        'supportedStorageTypes' => 'SupportedStorageTypes',
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
        if (null !== $this->supportedStorageTypes) {
            $res['SupportedStorageTypes'] = null !== $this->supportedStorageTypes ? $this->supportedStorageTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['SupportedStorageTypes'])) {
            $model->supportedStorageTypes = supportedStorageTypes::fromMap($map['SupportedStorageTypes']);
        }

        return $model;
    }
}
