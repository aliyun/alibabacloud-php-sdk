<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class PathConfig extends Model
{
    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string[]
     */
    public $methods;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var RewriteConfig
     */
    public $rewriteConfig;
    protected $_name = [
        'functionName' => 'functionName',
        'methods' => 'methods',
        'path' => 'path',
        'qualifier' => 'qualifier',
        'rewriteConfig' => 'rewriteConfig',
    ];

    public function validate()
    {
        if (\is_array($this->methods)) {
            Model::validateArray($this->methods);
        }
        if (null !== $this->rewriteConfig) {
            $this->rewriteConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->methods) {
            if (\is_array($this->methods)) {
                $res['methods'] = [];
                $n1 = 0;
                foreach ($this->methods as $item1) {
                    $res['methods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->rewriteConfig) {
            $res['rewriteConfig'] = null !== $this->rewriteConfig ? $this->rewriteConfig->toArray($noStream) : $this->rewriteConfig;
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
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = [];
                $n1 = 0;
                foreach ($map['methods'] as $item1) {
                    $model->methods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['rewriteConfig'])) {
            $model->rewriteConfig = RewriteConfig::fromMap($map['rewriteConfig']);
        }

        return $model;
    }
}
