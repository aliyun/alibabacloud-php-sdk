<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments;
use AlibabaCloud\Tea\Model;

class HttpApiApiInfo extends Model
{
    /**
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
     * @var environments[]
     */
    public $environments;

    /**
     * @example api-xxx
     *
     * @var string
     */
    public $httpApiId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @var HttpApiVersionInfo
     */
    public $versionInfo;
    protected $_name = [
        'basePath'     => 'basePath',
        'description'  => 'description',
        'environments' => 'environments',
        'httpApiId'    => 'httpApiId',
        'name'         => 'name',
        'protocols'    => 'protocols',
        'versionInfo'  => 'versionInfo',
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
        if (null !== $this->environments) {
            $res['environments'] = [];
            if (null !== $this->environments && \is_array($this->environments)) {
                $n = 0;
                foreach ($this->environments as $item) {
                    $res['environments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->protocols) {
            $res['protocols'] = $this->protocols;
        }
        if (null !== $this->versionInfo) {
            $res['versionInfo'] = null !== $this->versionInfo ? $this->versionInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiApiInfo
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
        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n                   = 0;
                foreach ($map['environments'] as $item) {
                    $model->environments[$n++] = null !== $item ? environments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = $map['protocols'];
            }
        }
        if (isset($map['versionInfo'])) {
            $model->versionInfo = HttpApiVersionInfo::fromMap($map['versionInfo']);
        }

        return $model;
    }
}
