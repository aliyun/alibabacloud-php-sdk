<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class UpdateGlobalEventsStorageRegionRequest extends Model
{
    /**
     * @var string
     */
    public $storageRegion;
    protected $_name = [
        'storageRegion' => 'StorageRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageRegion) {
            $res['StorageRegion'] = $this->storageRegion;
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
        if (isset($map['StorageRegion'])) {
            $model->storageRegion = $map['StorageRegion'];
        }

        return $model;
    }
}
