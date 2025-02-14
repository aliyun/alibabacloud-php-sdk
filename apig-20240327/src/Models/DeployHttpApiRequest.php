<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig;

class DeployHttpApiRequest extends Model
{
    /**
     * @var restApiConfig
     */
    public $restApiConfig;
    /**
     * @var string
     */
    public $routeId;
    protected $_name = [
        'restApiConfig' => 'restApiConfig',
        'routeId'       => 'routeId',
    ];

    public function validate()
    {
        if (null !== $this->restApiConfig) {
            $this->restApiConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restApiConfig) {
            $res['restApiConfig'] = null !== $this->restApiConfig ? $this->restApiConfig->toArray($noStream) : $this->restApiConfig;
        }

        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
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
        if (isset($map['restApiConfig'])) {
            $model->restApiConfig = restApiConfig::fromMap($map['restApiConfig']);
        }

        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        return $model;
    }
}
