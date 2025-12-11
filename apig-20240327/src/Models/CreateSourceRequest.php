<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceRequest\k8sSourceConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceRequest\nacosSourceConfig;

class CreateSourceRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var k8sSourceConfig
     */
    public $k8sSourceConfig;

    /**
     * @var nacosSourceConfig
     */
    public $nacosSourceConfig;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'k8sSourceConfig' => 'k8sSourceConfig',
        'nacosSourceConfig' => 'nacosSourceConfig',
        'resourceGroupId' => 'resourceGroupId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->k8sSourceConfig) {
            $this->k8sSourceConfig->validate();
        }
        if (null !== $this->nacosSourceConfig) {
            $this->nacosSourceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->k8sSourceConfig) {
            $res['k8sSourceConfig'] = null !== $this->k8sSourceConfig ? $this->k8sSourceConfig->toArray($noStream) : $this->k8sSourceConfig;
        }

        if (null !== $this->nacosSourceConfig) {
            $res['nacosSourceConfig'] = null !== $this->nacosSourceConfig ? $this->nacosSourceConfig->toArray($noStream) : $this->nacosSourceConfig;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['k8sSourceConfig'])) {
            $model->k8sSourceConfig = k8sSourceConfig::fromMap($map['k8sSourceConfig']);
        }

        if (isset($map['nacosSourceConfig'])) {
            $model->nacosSourceConfig = nacosSourceConfig::fromMap($map['nacosSourceConfig']);
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
