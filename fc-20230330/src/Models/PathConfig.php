<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class PathConfig extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var InnerRewriteConfig
     */
    public $innerRewriteConfig;

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

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'accountId'          => 'accountId',
        'functionName'       => 'functionName',
        'innerRewriteConfig' => 'innerRewriteConfig',
        'methods'            => 'methods',
        'path'               => 'path',
        'qualifier'          => 'qualifier',
        'rewriteConfig'      => 'rewriteConfig',
        'serviceName'        => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->innerRewriteConfig) {
            $res['innerRewriteConfig'] = null !== $this->innerRewriteConfig ? $this->innerRewriteConfig->toMap() : null;
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
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['innerRewriteConfig'])) {
            $model->innerRewriteConfig = InnerRewriteConfig::fromMap($map['innerRewriteConfig']);
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
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
