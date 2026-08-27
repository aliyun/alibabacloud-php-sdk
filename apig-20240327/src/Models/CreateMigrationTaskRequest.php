<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreateMigrationTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $httpApiId;

    /**
     * @var string
     */
    public $ingressClass;

    /**
     * @var string
     */
    public $migrationType;

    /**
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'clusterId' => 'clusterId',
        'description' => 'description',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'httpApiId' => 'httpApiId',
        'ingressClass' => 'ingressClass',
        'migrationType' => 'migrationType',
        'watchNamespace' => 'watchNamespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }

        if (null !== $this->ingressClass) {
            $res['ingressClass'] = $this->ingressClass;
        }

        if (null !== $this->migrationType) {
            $res['migrationType'] = $this->migrationType;
        }

        if (null !== $this->watchNamespace) {
            $res['watchNamespace'] = $this->watchNamespace;
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }

        if (isset($map['ingressClass'])) {
            $model->ingressClass = $map['ingressClass'];
        }

        if (isset($map['migrationType'])) {
            $model->migrationType = $map['migrationType'];
        }

        if (isset($map['watchNamespace'])) {
            $model->watchNamespace = $map['watchNamespace'];
        }

        return $model;
    }
}
