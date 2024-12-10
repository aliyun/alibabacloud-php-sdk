<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyEssdCacheConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example amv-bp10yt0gva71ei7d
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enableEssdCache;

    /**
     * @example 500
     *
     * @var int
     */
    public $essdCacheSize;
    protected $_name = [
        'DBClusterId'     => 'DBClusterId',
        'enableEssdCache' => 'EnableEssdCache',
        'essdCacheSize'   => 'EssdCacheSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enableEssdCache) {
            $res['EnableEssdCache'] = $this->enableEssdCache;
        }
        if (null !== $this->essdCacheSize) {
            $res['EssdCacheSize'] = $this->essdCacheSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEssdCacheConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EnableEssdCache'])) {
            $model->enableEssdCache = $map['EnableEssdCache'];
        }
        if (isset($map['EssdCacheSize'])) {
            $model->essdCacheSize = $map['EssdCacheSize'];
        }

        return $model;
    }
}
