<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class PathConfig extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example myFunction
     *
     * @var string
     */
    public $functionName;

    /**
     * @var string[]
     */
    public $methods;

    /**
     * @description This parameter is required.
     *
     * @example /api/*
     *
     * @var string
     */
    public $path;

    /**
     * @example myAlias
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->methods) {
            $res['methods'] = $this->methods;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->rewriteConfig) {
            $res['rewriteConfig'] = null !== $this->rewriteConfig ? $this->rewriteConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PathConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = $map['methods'];
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
