<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody\configs\ossLogConfig;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody\configs\wafConfig;

class configs extends Model
{
    /**
     * @var ossLogConfig
     */
    public $ossLogConfig;

    /**
     * @var wafConfig
     */
    public $wafConfig;
    protected $_name = [
        'ossLogConfig' => 'OssLogConfig',
        'wafConfig' => 'WafConfig',
    ];

    public function validate()
    {
        if (null !== $this->ossLogConfig) {
            $this->ossLogConfig->validate();
        }
        if (null !== $this->wafConfig) {
            $this->wafConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossLogConfig) {
            $res['OssLogConfig'] = null !== $this->ossLogConfig ? $this->ossLogConfig->toArray($noStream) : $this->ossLogConfig;
        }

        if (null !== $this->wafConfig) {
            $res['WafConfig'] = null !== $this->wafConfig ? $this->wafConfig->toArray($noStream) : $this->wafConfig;
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
        if (isset($map['OssLogConfig'])) {
            $model->ossLogConfig = ossLogConfig::fromMap($map['OssLogConfig']);
        }

        if (isset($map['WafConfig'])) {
            $model->wafConfig = wafConfig::fromMap($map['WafConfig']);
        }

        return $model;
    }
}
