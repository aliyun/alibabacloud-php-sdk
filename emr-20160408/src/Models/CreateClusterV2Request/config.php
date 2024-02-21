<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @example fs.trash.interval
     *
     * @var string
     */
    public $configKey;

    /**
     * @example 60
     *
     * @var string
     */
    public $configValue;

    /**
     * @example 0
     *
     * @var string
     */
    public $encrypt;

    /**
     * @example yarn-site
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 0
     *
     * @var string
     */
    public $replace;

    /**
     * @example YARN
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'configKey'   => 'ConfigKey',
        'configValue' => 'ConfigValue',
        'encrypt'     => 'Encrypt',
        'fileName'    => 'FileName',
        'replace'     => 'Replace',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->replace) {
            $res['Replace'] = $this->replace;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Replace'])) {
            $model->replace = $map['Replace'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
