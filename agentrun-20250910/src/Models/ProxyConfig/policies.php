<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ProxyConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ProxyConfig\policies\fallbacks;

class policies extends Model
{
    /**
     * @var bool
     */
    public $cache;

    /**
     * @var int
     */
    public $concurrencyLimit;

    /**
     * @var fallbacks[]
     */
    public $fallbacks;

    /**
     * @var int
     */
    public $numRetries;

    /**
     * @var int
     */
    public $requestTimeout;
    protected $_name = [
        'cache' => 'cache',
        'concurrencyLimit' => 'concurrencyLimit',
        'fallbacks' => 'fallbacks',
        'numRetries' => 'numRetries',
        'requestTimeout' => 'requestTimeout',
    ];

    public function validate()
    {
        if (\is_array($this->fallbacks)) {
            Model::validateArray($this->fallbacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cache) {
            $res['cache'] = $this->cache;
        }

        if (null !== $this->concurrencyLimit) {
            $res['concurrencyLimit'] = $this->concurrencyLimit;
        }

        if (null !== $this->fallbacks) {
            if (\is_array($this->fallbacks)) {
                $res['fallbacks'] = [];
                $n1 = 0;
                foreach ($this->fallbacks as $item1) {
                    $res['fallbacks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->numRetries) {
            $res['numRetries'] = $this->numRetries;
        }

        if (null !== $this->requestTimeout) {
            $res['requestTimeout'] = $this->requestTimeout;
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
        if (isset($map['cache'])) {
            $model->cache = $map['cache'];
        }

        if (isset($map['concurrencyLimit'])) {
            $model->concurrencyLimit = $map['concurrencyLimit'];
        }

        if (isset($map['fallbacks'])) {
            if (!empty($map['fallbacks'])) {
                $model->fallbacks = [];
                $n1 = 0;
                foreach ($map['fallbacks'] as $item1) {
                    $model->fallbacks[$n1] = fallbacks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['numRetries'])) {
            $model->numRetries = $map['numRetries'];
        }

        if (isset($map['requestTimeout'])) {
            $model->requestTimeout = $map['requestTimeout'];
        }

        return $model;
    }
}
