<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyEssdCacheConfigRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $enableEssdCache;

    /**
     * @var int
     */
    public $essdCacheSize;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'enableEssdCache' => 'EnableEssdCache',
        'essdCacheSize' => 'EssdCacheSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
