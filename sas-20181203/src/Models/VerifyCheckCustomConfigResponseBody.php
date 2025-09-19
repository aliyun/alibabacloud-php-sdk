<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigResponseBody\errorCheckConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigResponseBody\errorCheckCustomConfig;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigResponseBody\errorRepairConfigs;

class VerifyCheckCustomConfigResponseBody extends Model
{
    /**
     * @var errorCheckConfigs[]
     */
    public $errorCheckConfigs;

    /**
     * @var errorCheckCustomConfig
     */
    public $errorCheckCustomConfig;

    /**
     * @var errorRepairConfigs[]
     */
    public $errorRepairConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorCheckConfigs' => 'ErrorCheckConfigs',
        'errorCheckCustomConfig' => 'ErrorCheckCustomConfig',
        'errorRepairConfigs' => 'ErrorRepairConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->errorCheckConfigs)) {
            Model::validateArray($this->errorCheckConfigs);
        }
        if (null !== $this->errorCheckCustomConfig) {
            $this->errorCheckCustomConfig->validate();
        }
        if (\is_array($this->errorRepairConfigs)) {
            Model::validateArray($this->errorRepairConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCheckConfigs) {
            if (\is_array($this->errorCheckConfigs)) {
                $res['ErrorCheckConfigs'] = [];
                $n1 = 0;
                foreach ($this->errorCheckConfigs as $item1) {
                    $res['ErrorCheckConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorCheckCustomConfig) {
            $res['ErrorCheckCustomConfig'] = null !== $this->errorCheckCustomConfig ? $this->errorCheckCustomConfig->toArray($noStream) : $this->errorCheckCustomConfig;
        }

        if (null !== $this->errorRepairConfigs) {
            if (\is_array($this->errorRepairConfigs)) {
                $res['ErrorRepairConfigs'] = [];
                $n1 = 0;
                foreach ($this->errorRepairConfigs as $item1) {
                    $res['ErrorRepairConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ErrorCheckConfigs'])) {
            if (!empty($map['ErrorCheckConfigs'])) {
                $model->errorCheckConfigs = [];
                $n1 = 0;
                foreach ($map['ErrorCheckConfigs'] as $item1) {
                    $model->errorCheckConfigs[$n1] = errorCheckConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorCheckCustomConfig'])) {
            $model->errorCheckCustomConfig = errorCheckCustomConfig::fromMap($map['ErrorCheckCustomConfig']);
        }

        if (isset($map['ErrorRepairConfigs'])) {
            if (!empty($map['ErrorRepairConfigs'])) {
                $model->errorRepairConfigs = [];
                $n1 = 0;
                foreach ($map['ErrorRepairConfigs'] as $item1) {
                    $model->errorRepairConfigs[$n1] = errorRepairConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
