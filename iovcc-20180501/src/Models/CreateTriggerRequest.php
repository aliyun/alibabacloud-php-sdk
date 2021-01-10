<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $fileIds;

    /**
     * @var string
     */
    public $functionIds;

    /**
     * @var int
     */
    public $invocationMode;

    /**
     * @var int
     */
    public $sandbox;

    /**
     * @var int
     */
    public $production;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'namespace'      => 'Namespace',
        'source'         => 'Source',
        'fileIds'        => 'FileIds',
        'functionIds'    => 'FunctionIds',
        'invocationMode' => 'InvocationMode',
        'sandbox'        => 'Sandbox',
        'production'     => 'Production',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->fileIds) {
            $res['FileIds'] = $this->fileIds;
        }
        if (null !== $this->functionIds) {
            $res['FunctionIds'] = $this->functionIds;
        }
        if (null !== $this->invocationMode) {
            $res['InvocationMode'] = $this->invocationMode;
        }
        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }
        if (null !== $this->production) {
            $res['Production'] = $this->production;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['FileIds'])) {
            $model->fileIds = $map['FileIds'];
        }
        if (isset($map['FunctionIds'])) {
            $model->functionIds = $map['FunctionIds'];
        }
        if (isset($map['InvocationMode'])) {
            $model->invocationMode = $map['InvocationMode'];
        }
        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }
        if (isset($map['Production'])) {
            $model->production = $map['Production'];
        }

        return $model;
    }
}
