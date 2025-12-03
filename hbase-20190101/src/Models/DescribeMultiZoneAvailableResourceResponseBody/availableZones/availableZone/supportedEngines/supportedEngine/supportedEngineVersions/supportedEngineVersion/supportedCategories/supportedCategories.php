<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes;

class supportedCategories extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var supportedStorageTypes
     */
    public $supportedStorageTypes;
    protected $_name = [
        'category' => 'Category',
        'supportedStorageTypes' => 'SupportedStorageTypes',
    ];

    public function validate()
    {
        if (null !== $this->supportedStorageTypes) {
            $this->supportedStorageTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->supportedStorageTypes) {
            $res['SupportedStorageTypes'] = null !== $this->supportedStorageTypes ? $this->supportedStorageTypes->toArray($noStream) : $this->supportedStorageTypes;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
