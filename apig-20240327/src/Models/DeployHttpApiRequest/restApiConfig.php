<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig\environment;

class restApiConfig extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var environment
     */
    public $environment;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string[]
     */
    public $operationIds;

    /**
     * @var string
     */
    public $revisionId;
    protected $_name = [
        'description' => 'description',
        'environment' => 'environment',
        'gatewayId' => 'gatewayId',
        'operationIds' => 'operationIds',
        'revisionId' => 'revisionId',
    ];

    public function validate()
    {
        if (null !== $this->environment) {
            $this->environment->validate();
        }
        if (\is_array($this->operationIds)) {
            Model::validateArray($this->operationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environment) {
            $res['environment'] = null !== $this->environment ? $this->environment->toArray($noStream) : $this->environment;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->operationIds) {
            if (\is_array($this->operationIds)) {
                $res['operationIds'] = [];
                $n1 = 0;
                foreach ($this->operationIds as $item1) {
                    $res['operationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->revisionId) {
            $res['revisionId'] = $this->revisionId;
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

        if (isset($map['environment'])) {
            $model->environment = environment::fromMap($map['environment']);
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['operationIds'])) {
            if (!empty($map['operationIds'])) {
                $model->operationIds = [];
                $n1 = 0;
                foreach ($map['operationIds'] as $item1) {
                    $model->operationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['revisionId'])) {
            $model->revisionId = $map['revisionId'];
        }

        return $model;
    }
}
