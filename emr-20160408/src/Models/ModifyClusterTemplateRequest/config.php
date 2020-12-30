<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateRequest;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $replace;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $encrypt;
    protected $_name = [
        'configValue' => 'ConfigValue',
        'replace'     => 'Replace',
        'fileName'    => 'FileName',
        'serviceName' => 'ServiceName',
        'configKey'   => 'ConfigKey',
        'encrypt'     => 'Encrypt',
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
        if (null !== $this->replace) {
            $res['Replace'] = $this->replace;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }
        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['Replace'])) {
            $model->replace = $map['Replace'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }
        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }

        return $model;
    }
}
