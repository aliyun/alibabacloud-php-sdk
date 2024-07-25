<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateHttpApiRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example /v1
     *
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @var HttpApiVersionConfig
     */
    public $versionConfig;
    protected $_name = [
        'basePath'      => 'basePath',
        'description'   => 'description',
        'name'          => 'name',
        'protocols'     => 'protocols',
        'versionConfig' => 'versionConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->protocols) {
            $res['protocols'] = $this->protocols;
        }
        if (null !== $this->versionConfig) {
            $res['versionConfig'] = null !== $this->versionConfig ? $this->versionConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHttpApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['basePath'])) {
            $model->basePath = $map['basePath'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = $map['protocols'];
            }
        }
        if (isset($map['versionConfig'])) {
            $model->versionConfig = HttpApiVersionConfig::fromMap($map['versionConfig']);
        }

        return $model;
    }
}
