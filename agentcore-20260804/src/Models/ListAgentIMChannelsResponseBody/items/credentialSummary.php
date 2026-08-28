<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentIMChannelsResponseBody\items;

use AlibabaCloud\Dara\Model;

class credentialSummary extends Model
{
    /**
     * @var string[]
     */
    public $configuredSecretFields;

    /**
     * @var string[]
     */
    public $nonSecretFields;
    protected $_name = [
        'configuredSecretFields' => 'configuredSecretFields',
        'nonSecretFields' => 'nonSecretFields',
    ];

    public function validate()
    {
        if (\is_array($this->configuredSecretFields)) {
            Model::validateArray($this->configuredSecretFields);
        }
        if (\is_array($this->nonSecretFields)) {
            Model::validateArray($this->nonSecretFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuredSecretFields) {
            if (\is_array($this->configuredSecretFields)) {
                $res['configuredSecretFields'] = [];
                $n1 = 0;
                foreach ($this->configuredSecretFields as $item1) {
                    $res['configuredSecretFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonSecretFields) {
            if (\is_array($this->nonSecretFields)) {
                $res['nonSecretFields'] = [];
                foreach ($this->nonSecretFields as $key1 => $value1) {
                    $res['nonSecretFields'][$key1] = $value1;
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
        if (isset($map['configuredSecretFields'])) {
            if (!empty($map['configuredSecretFields'])) {
                $model->configuredSecretFields = [];
                $n1 = 0;
                foreach ($map['configuredSecretFields'] as $item1) {
                    $model->configuredSecretFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['nonSecretFields'])) {
            if (!empty($map['nonSecretFields'])) {
                $model->nonSecretFields = [];
                foreach ($map['nonSecretFields'] as $key1 => $value1) {
                    $model->nonSecretFields[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
