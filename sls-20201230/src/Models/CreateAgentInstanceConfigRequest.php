<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateAgentInstanceConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $config;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $configMatcher;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $configName;

    /**
     * @var bool
     */
    public $isGray;
    protected $_name = [
        'config'        => 'config',
        'configMatcher' => 'configMatcher',
        'configName'    => 'configName',
        'isGray'        => 'isGray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->configMatcher) {
            $res['configMatcher'] = $this->configMatcher;
        }
        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }
        if (null !== $this->isGray) {
            $res['isGray'] = $this->isGray;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAgentInstanceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['configMatcher'])) {
            $model->configMatcher = $map['configMatcher'];
        }
        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }
        if (isset($map['isGray'])) {
            $model->isGray = $map['isGray'];
        }

        return $model;
    }
}
