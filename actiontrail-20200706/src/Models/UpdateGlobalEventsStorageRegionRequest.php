<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class UpdateGlobalEventsStorageRegionRequest extends Model
{
    /**
     * @description The region where you want to store global events.
     *
     * Valid values:
     *
     *   ap-southeast-1
     *
     * <!-- -->
     *
     *   cn-hangzhou
     *
     * <!-- -->
     * @example ap-southeast-1
     *
     * @var string
     */
    public $storageRegion;
    protected $_name = [
        'storageRegion' => 'StorageRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageRegion) {
            $res['StorageRegion'] = $this->storageRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGlobalEventsStorageRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageRegion'])) {
            $model->storageRegion = $map['StorageRegion'];
        }

        return $model;
    }
}
