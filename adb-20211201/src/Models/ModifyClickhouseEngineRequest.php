<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyClickhouseEngineRequest extends Model
{
    /**
     * @var int
     */
    public $cacheSize;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'cacheSize' => 'CacheSize',
        'DBClusterId' => 'DBClusterId',
        'enabled' => 'Enabled',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
