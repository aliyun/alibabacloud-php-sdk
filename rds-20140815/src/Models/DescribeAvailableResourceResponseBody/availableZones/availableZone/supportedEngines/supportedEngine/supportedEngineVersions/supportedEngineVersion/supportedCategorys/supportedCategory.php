<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes;
use AlibabaCloud\Tea\Model;

class supportedCategory extends Model
{
    /**
     * @var supportedStorageTypes
     */
    public $supportedStorageTypes;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'supportedStorageTypes' => 'SupportedStorageTypes',
        'category'              => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedStorageTypes) {
            $res['SupportedStorageTypes'] = null !== $this->supportedStorageTypes ? $this->supportedStorageTypes->toMap() : null;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedStorageTypes'])) {
            $model->supportedStorageTypes = supportedStorageTypes::fromMap($map['SupportedStorageTypes']);
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
