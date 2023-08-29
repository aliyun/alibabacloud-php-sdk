<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdateRegisteredLocationRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $inventoryCollectEnabled;

    /**
     * @example LOC-AB8FBC17F95A4AF5
     *
     * @var string
     */
    public $locationId;

    /**
     * @example true
     *
     * @var bool
     */
    public $ossLogCollectEnabled;
    protected $_name = [
        'inventoryCollectEnabled' => 'InventoryCollectEnabled',
        'locationId'              => 'LocationId',
        'ossLogCollectEnabled'    => 'OssLogCollectEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventoryCollectEnabled) {
            $res['InventoryCollectEnabled'] = $this->inventoryCollectEnabled;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->ossLogCollectEnabled) {
            $res['OssLogCollectEnabled'] = $this->ossLogCollectEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRegisteredLocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InventoryCollectEnabled'])) {
            $model->inventoryCollectEnabled = $map['InventoryCollectEnabled'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['OssLogCollectEnabled'])) {
            $model->ossLogCollectEnabled = $map['OssLogCollectEnabled'];
        }

        return $model;
    }
}
