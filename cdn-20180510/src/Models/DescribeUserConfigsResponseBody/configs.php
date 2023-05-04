<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody\configs\ossLogConfig;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody\configs\wafConfig;
use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description The configurations of Object Storage Service (OSS).
     *
     * @var ossLogConfig
     */
    public $ossLogConfig;

    /**
     * @description The configurations of Web Application Firewall (WAF).
     *
     * @var wafConfig
     */
    public $wafConfig;
    protected $_name = [
        'ossLogConfig' => 'OssLogConfig',
        'wafConfig'    => 'WafConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossLogConfig) {
            $res['OssLogConfig'] = null !== $this->ossLogConfig ? $this->ossLogConfig->toMap() : null;
        }
        if (null !== $this->wafConfig) {
            $res['WafConfig'] = null !== $this->wafConfig ? $this->wafConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssLogConfig'])) {
            $model->ossLogConfig = ossLogConfig::fromMap($map['OssLogConfig']);
        }
        if (isset($map['WafConfig'])) {
            $model->wafConfig = wafConfig::fromMap($map['WafConfig']);
        }

        return $model;
    }
}
