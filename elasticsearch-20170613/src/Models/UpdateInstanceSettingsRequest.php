<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceSettingsRequest extends Model
{
    /**
     * @var string[]
     */
    public $esConfig;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $updateStrategy;
    protected $_name = [
        'esConfig' => 'esConfig',
        'clientToken' => 'clientToken',
        'force' => 'force',
        'updateStrategy' => 'updateStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->esConfig)) {
            Model::validateArray($this->esConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->esConfig) {
            if (\is_array($this->esConfig)) {
                $res['esConfig'] = [];
                foreach ($this->esConfig as $key1 => $value1) {
                    $res['esConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        if (null !== $this->updateStrategy) {
            $res['updateStrategy'] = $this->updateStrategy;
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
        if (isset($map['esConfig'])) {
            if (!empty($map['esConfig'])) {
                $model->esConfig = [];
                foreach ($map['esConfig'] as $key1 => $value1) {
                    $model->esConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        if (isset($map['updateStrategy'])) {
            $model->updateStrategy = $map['updateStrategy'];
        }

        return $model;
    }
}
