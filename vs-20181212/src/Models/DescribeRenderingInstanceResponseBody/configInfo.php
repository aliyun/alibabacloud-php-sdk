<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\configInfo\configuration;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\configInfo\networkConfig;

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
        if (\is_array($this->configuration)) {
            Model::validateArray($this->configuration);
        }
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            if (\is_array($this->configuration)) {
                $res['Configuration'] = [];
                $n1 = 0;
                foreach ($this->configuration as $item1) {
                    $res['Configuration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkConfig) {
            $res['NetworkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toArray($noStream) : $this->networkConfig;
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
        if (isset($map['Configuration'])) {
            if (!empty($map['Configuration'])) {
                $model->configuration = [];
                $n1 = 0;
                foreach ($map['Configuration'] as $item1) {
                    $model->configuration[$n1] = configuration::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['NetworkConfig']);
        }

        return $model;
    }
}
