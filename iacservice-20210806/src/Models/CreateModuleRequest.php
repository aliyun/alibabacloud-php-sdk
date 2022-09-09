<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class CreateModuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $statePath;

    /**
     * @var string
     */
    public $versionStrategy;
    protected $_name = [
        'clientToken'     => 'clientToken',
        'description'     => 'description',
        'name'            => 'name',
        'source'          => 'source',
        'sourcePath'      => 'sourcePath',
        'statePath'       => 'statePath',
        'versionStrategy' => 'versionStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }
        if (null !== $this->statePath) {
            $res['statePath'] = $this->statePath;
        }
        if (null !== $this->versionStrategy) {
            $res['versionStrategy'] = $this->versionStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }
        if (isset($map['statePath'])) {
            $model->statePath = $map['statePath'];
        }
        if (isset($map['versionStrategy'])) {
            $model->versionStrategy = $map['versionStrategy'];
        }

        return $model;
    }
}
