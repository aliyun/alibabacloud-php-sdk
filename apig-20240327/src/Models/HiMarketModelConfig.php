<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketModelConfig\modelAPIConfig;

class HiMarketModelConfig extends Model
{
    /**
     * @var modelAPIConfig
     */
    public $modelAPIConfig;
    protected $_name = [
        'modelAPIConfig' => 'modelAPIConfig',
    ];

    public function validate()
    {
        if (null !== $this->modelAPIConfig) {
            $this->modelAPIConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelAPIConfig) {
            $res['modelAPIConfig'] = null !== $this->modelAPIConfig ? $this->modelAPIConfig->toArray($noStream) : $this->modelAPIConfig;
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
        if (isset($map['modelAPIConfig'])) {
            $model->modelAPIConfig = modelAPIConfig::fromMap($map['modelAPIConfig']);
        }

        return $model;
    }
}
