<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class CreateProductDeploymentRequest extends Model
{
    /**
     * @example 3c923aa6-2fcf-40cc-8412-xxx
     *
     * @var string
     */
    public $environmentUID;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @example 93cf4ffe-9dc6-4a84-ba8d-xxx
     *
     * @var string
     */
    public $oldProductVersionUID;

    /**
     * @var string
     */
    public $packageConfig;

    /**
     * @example 474daaa5-0a7b-4af9-8080-xxx
     *
     * @var string
     */
    public $packageUID;

    /**
     * @example bef2616b-b469-4a6f-b405-xxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'environmentUID'       => 'environmentUID',
        'namespace'            => 'namespace',
        'oldProductVersionUID' => 'oldProductVersionUID',
        'packageConfig'        => 'packageConfig',
        'packageUID'           => 'packageUID',
        'productVersionUID'    => 'productVersionUID',
        'timeout'              => 'timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentUID) {
            $res['environmentUID'] = $this->environmentUID;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->oldProductVersionUID) {
            $res['oldProductVersionUID'] = $this->oldProductVersionUID;
        }
        if (null !== $this->packageConfig) {
            $res['packageConfig'] = $this->packageConfig;
        }
        if (null !== $this->packageUID) {
            $res['packageUID'] = $this->packageUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductDeploymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentUID'])) {
            $model->environmentUID = $map['environmentUID'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['oldProductVersionUID'])) {
            $model->oldProductVersionUID = $map['oldProductVersionUID'];
        }
        if (isset($map['packageConfig'])) {
            $model->packageConfig = $map['packageConfig'];
        }
        if (isset($map['packageUID'])) {
            $model->packageUID = $map['packageUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
