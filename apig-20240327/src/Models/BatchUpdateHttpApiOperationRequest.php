<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchUpdateHttpApiOperationRequest\authConfig;

class BatchUpdateHttpApiOperationRequest extends Model
{
    /**
     * @var authConfig
     */
    public $authConfig;

    /**
     * @var bool
     */
    public $enableAuth;

    /**
     * @var string[]
     */
    public $operationIds;
    protected $_name = [
        'authConfig' => 'authConfig',
        'enableAuth' => 'enableAuth',
        'operationIds' => 'operationIds',
    ];

    public function validate()
    {
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (\is_array($this->operationIds)) {
            Model::validateArray($this->operationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
        }

        if (null !== $this->enableAuth) {
            $res['enableAuth'] = $this->enableAuth;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authConfig'])) {
            $model->authConfig = authConfig::fromMap($map['authConfig']);
        }

        if (isset($map['enableAuth'])) {
            $model->enableAuth = $map['enableAuth'];
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

        return $model;
    }
}
