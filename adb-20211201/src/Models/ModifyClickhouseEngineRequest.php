<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyClickhouseEngineRequest extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $cacheSize;

    /**
     * @description This parameter is required.
     *
     * @example amv-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'cacheSize'   => 'CacheSize',
        'DBClusterId' => 'DBClusterId',
        'enabled'     => 'Enabled',
        'ownerId'     => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheSize) {
            $res['CacheSize'] = $this->cacheSize;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClickhouseEngineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheSize'])) {
            $model->cacheSize = $map['CacheSize'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
