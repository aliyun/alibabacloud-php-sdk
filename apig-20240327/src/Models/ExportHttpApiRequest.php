<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ExportHttpApiRequest\extensionConfig;

class ExportHttpApiRequest extends Model
{
    /**
     * @var extensionConfig
     */
    public $extensionConfig;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string[]
     */
    public $operationIds;
    protected $_name = [
        'extensionConfig' => 'extensionConfig',
        'gatewayId' => 'gatewayId',
        'operationIds' => 'operationIds',
    ];

    public function validate()
    {
        if (null !== $this->extensionConfig) {
            $this->extensionConfig->validate();
        }
        if (\is_array($this->operationIds)) {
            Model::validateArray($this->operationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extensionConfig) {
            $res['extensionConfig'] = null !== $this->extensionConfig ? $this->extensionConfig->toArray($noStream) : $this->extensionConfig;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extensionConfig'])) {
            $model->extensionConfig = extensionConfig::fromMap($map['extensionConfig']);
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

        return $model;
    }
}
