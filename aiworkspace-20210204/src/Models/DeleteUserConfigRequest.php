<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DeleteUserConfigRequest extends Model
{
    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'configKey' => 'ConfigKey',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
