<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponseBody\platforms\rayTrainConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponseBody\platforms\rayTrainConfig\terminalConfig\acrConfig;

class terminalConfig extends Model
{
    /**
     * @var acrConfig
     */
    public $acrConfig;
    protected $_name = [
        'acrConfig' => 'AcrConfig',
    ];

    public function validate()
    {
        if (null !== $this->acrConfig) {
            $this->acrConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrConfig) {
            $res['AcrConfig'] = null !== $this->acrConfig ? $this->acrConfig->toArray($noStream) : $this->acrConfig;
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
        if (isset($map['AcrConfig'])) {
            $model->acrConfig = acrConfig::fromMap($map['AcrConfig']);
        }

        return $model;
    }
}
