<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType\availableResources;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType\availableResources\availableResource\DBInstanceStorageRange;
use AlibabaCloud\Tea\Model;

class availableResource extends Model
{
    /**
     * @var DBInstanceStorageRange
     */
    public $DBInstanceStorageRange;

    /**
     * @var string
     */
    public $storageRange;

    /**
     * @var string
     */
    public $DBInstanceClass;
    protected $_name = [
        'DBInstanceStorageRange' => 'DBInstanceStorageRange',
        'storageRange'           => 'StorageRange',
        'DBInstanceClass'        => 'DBInstanceClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceStorageRange) {
            $res['DBInstanceStorageRange'] = null !== $this->DBInstanceStorageRange ? $this->DBInstanceStorageRange->toMap() : null;
        }
        if (null !== $this->storageRange) {
            $res['StorageRange'] = $this->storageRange;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceStorageRange'])) {
            $model->DBInstanceStorageRange = DBInstanceStorageRange::fromMap($map['DBInstanceStorageRange']);
        }
        if (isset($map['StorageRange'])) {
            $model->storageRange = $map['StorageRange'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        return $model;
    }
}
