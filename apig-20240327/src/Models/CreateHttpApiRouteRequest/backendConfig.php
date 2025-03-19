<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest\backendConfig\services;
use AlibabaCloud\Tea\Model;

class backendConfig extends Model
{
    /**
     * @description The scenario of the backend service.
     *
     *   SingleService
     *   MultiServiceByRatio
     *   Mock
     *   Redirect
     *
     * @example SingleService
     *
     * @var string
     */
    public $scene;

    /**
     * @description The backend services.
     *
     * @var services[]
     */
    public $services;
    protected $_name = [
        'scene' => 'scene',
        'services' => 'services',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->services) {
            $res['services'] = [];
            if (null !== $this->services && \is_array($this->services)) {
                $n = 0;
                foreach ($this->services as $item) {
                    $res['services'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['services'])) {
            if (!empty($map['services'])) {
                $model->services = [];
                $n = 0;
                foreach ($map['services'] as $item) {
                    $model->services[$n++] = null !== $item ? services::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
