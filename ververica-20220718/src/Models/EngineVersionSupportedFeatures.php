<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class EngineVersionSupportedFeatures extends Model
{
    /**
     * @var bool
     */
    public $supportNativeSavepoint;
    /**
     * @var bool
     */
    public $useForSqlDeployments;
    protected $_name = [
        'supportNativeSavepoint' => 'supportNativeSavepoint',
        'useForSqlDeployments'   => 'useForSqlDeployments',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportNativeSavepoint) {
            $res['supportNativeSavepoint'] = $this->supportNativeSavepoint;
        }

        if (null !== $this->useForSqlDeployments) {
            $res['useForSqlDeployments'] = $this->useForSqlDeployments;
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
        if (isset($map['supportNativeSavepoint'])) {
            $model->supportNativeSavepoint = $map['supportNativeSavepoint'];
        }

        if (isset($map['useForSqlDeployments'])) {
            $model->useForSqlDeployments = $map['useForSqlDeployments'];
        }

        return $model;
    }
}
