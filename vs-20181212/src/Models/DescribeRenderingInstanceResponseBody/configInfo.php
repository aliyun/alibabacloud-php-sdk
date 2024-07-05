<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\configInfo\configuration;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\configInfo\networkConfig;
use AlibabaCloud\Tea\Model;

class configInfo extends Model
{
    /**
     * @var configuration[]
     */
    public $configuration;

    /**
     * @var networkConfig
     */
    public $networkConfig;
    protected $_name = [
        'configuration' => 'Configuration',
        'networkConfig' => 'NetworkConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = [];
            if (null !== $this->configuration && \is_array($this->configuration)) {
                $n = 0;
                foreach ($this->configuration as $item) {
                    $res['Configuration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkConfig) {
            $res['NetworkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            if (!empty($map['Configuration'])) {
                $model->configuration = [];
                $n                    = 0;
                foreach ($map['Configuration'] as $item) {
                    $model->configuration[$n++] = null !== $item ? configuration::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['NetworkConfig']);
        }

        return $model;
    }
}
