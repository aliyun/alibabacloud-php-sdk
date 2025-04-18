<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListFunctionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fcVersion;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'description' => 'description',
        'fcVersion' => 'fcVersion',
        'functionName' => 'functionName',
        'gpuType' => 'gpuType',
        'limit' => 'limit',
        'nextToken' => 'nextToken',
        'prefix' => 'prefix',
        'runtime' => 'runtime',
        'tagsShrink' => 'tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->fcVersion) {
            $res['fcVersion'] = $this->fcVersion;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->gpuType) {
            $res['gpuType'] = $this->gpuType;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['fcVersion'])) {
            $model->fcVersion = $map['fcVersion'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['gpuType'])) {
            $model->gpuType = $map['gpuType'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }

        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
