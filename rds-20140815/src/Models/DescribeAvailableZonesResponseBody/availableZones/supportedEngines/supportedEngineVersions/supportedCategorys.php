<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions\supportedCategorys\supportedStorageTypes;
use AlibabaCloud\Tea\Model;

class supportedCategorys extends Model
{
    /**
     * @description The RDS edition of the instance.
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description An array that consists of the storage types available in the zone.
     *
     * @var supportedStorageTypes[]
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
            $res['SupportedStorageTypes'] = [];
            if (null !== $this->supportedStorageTypes && \is_array($this->supportedStorageTypes)) {
                $n = 0;
                foreach ($this->supportedStorageTypes as $item) {
                    $res['SupportedStorageTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCategorys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['SupportedStorageTypes'])) {
            if (!empty($map['SupportedStorageTypes'])) {
                $model->supportedStorageTypes = [];
                $n                            = 0;
                foreach ($map['SupportedStorageTypes'] as $item) {
                    $model->supportedStorageTypes[$n++] = null !== $item ? supportedStorageTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
