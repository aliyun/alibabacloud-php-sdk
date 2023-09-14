<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationConfig extends Model
{
    /**
     * @description 修改描述。
     *
     * @example dfs.namenode.checkpoint.period
     *
     * @var string
     */
    public $configDescription;

    /**
     * @description 应用配置文件名。
     *
     * @example hdfs-site.xml
     *
     * @var string
     */
    public $configFileName;

    /**
     * @description 配置项键。
     *
     * @example dfs.namenode.checkpoint.period
     *
     * @var string
     */
    public $configItemKey;

    /**
     * @description 配置项值。
     *
     * @example 3600s
     *
     * @var string
     */
    public $configItemValue;
    protected $_name = [
        'configDescription' => 'ConfigDescription',
        'configFileName'    => 'ConfigFileName',
        'configItemKey'     => 'ConfigItemKey',
        'configItemValue'   => 'ConfigItemValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }
        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = $this->configItemValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }
        if (isset($map['ConfigItemValue'])) {
            $model->configItemValue = $map['ConfigItemValue'];
        }

        return $model;
    }
}
