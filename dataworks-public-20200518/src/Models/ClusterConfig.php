<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ClusterConfig extends Model
{
    /**
     * @example {"spark.driver.memory":"1g"}
     *
     * @var string
     */
    public $configValue;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableOverwrite;

    /**
     * @example ide
     *
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'configValue'     => 'ConfigValue',
        'enableOverwrite' => 'EnableOverwrite',
        'moduleName'      => 'ModuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ClusterConfig
     */
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
