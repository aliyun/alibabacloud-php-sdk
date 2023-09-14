<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ApplicationConfigFile extends Model
{
    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 配置文件名称。
     *
     * @example core-site.xml
     *
     * @var string
     */
    public $configFileName;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'configFileName'  => 'ConfigFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplicationConfigFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }

        return $model;
    }
}
