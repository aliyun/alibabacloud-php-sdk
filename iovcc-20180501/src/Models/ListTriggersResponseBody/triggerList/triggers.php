<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListTriggersResponseBody\triggerList;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListTriggersResponseBody\triggerList\triggers\functions;
use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $chainedFunctionIds;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $status;

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

    /**
     * @var functions[]
     */
    public $functions;
    protected $_name = [
        'id'                 => 'Id',
        'namespace'          => 'Namespace',
        'source'             => 'Source',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'chainedFunctionIds' => 'ChainedFunctionIds',
        'type'               => 'Type',
        'status'             => 'Status',
        'invocationMode'     => 'InvocationMode',
        'sandbox'            => 'Sandbox',
        'production'         => 'Production',
        'functions'          => 'Functions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->chainedFunctionIds) {
            $res['ChainedFunctionIds'] = $this->chainedFunctionIds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->functions) {
            $res['Functions'] = [];
            if (null !== $this->functions && \is_array($this->functions)) {
                $n = 0;
                foreach ($this->functions as $item) {
                    $res['Functions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ChainedFunctionIds'])) {
            $model->chainedFunctionIds = $map['ChainedFunctionIds'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Functions'])) {
            if (!empty($map['Functions'])) {
                $model->functions = [];
                $n                = 0;
                foreach ($map['Functions'] as $item) {
                    $model->functions[$n++] = null !== $item ? functions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
