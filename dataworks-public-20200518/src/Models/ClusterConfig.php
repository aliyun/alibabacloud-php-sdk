<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ClusterConfig extends Model
{
    /**
     * @var string
     */
    public $configValue;

    /**
     * @var bool
     */
    public $enableOverwrite;

    /**
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'configValue' => 'ConfigValue',
        'enableOverwrite' => 'EnableOverwrite',
        'moduleName' => 'ModuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        if (null !== $this->enableOverwrite) {
            $res['EnableOverwrite'] = $this->enableOverwrite;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
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
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        if (isset($map['EnableOverwrite'])) {
            $model->enableOverwrite = $map['EnableOverwrite'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
