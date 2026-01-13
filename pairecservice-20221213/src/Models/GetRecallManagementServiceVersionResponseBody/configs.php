<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\mergeConfig;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\recallConfigs;

class configs extends Model
{
    /**
     * @var mergeConfig
     */
    public $mergeConfig;

    /**
     * @var recallConfigs[]
     */
    public $recallConfigs;
    protected $_name = [
        'mergeConfig' => 'MergeConfig',
        'recallConfigs' => 'RecallConfigs',
    ];

    public function validate()
    {
        if (null !== $this->mergeConfig) {
            $this->mergeConfig->validate();
        }
        if (\is_array($this->recallConfigs)) {
            Model::validateArray($this->recallConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mergeConfig) {
            $res['MergeConfig'] = null !== $this->mergeConfig ? $this->mergeConfig->toArray($noStream) : $this->mergeConfig;
        }

        if (null !== $this->recallConfigs) {
            if (\is_array($this->recallConfigs)) {
                $res['RecallConfigs'] = [];
                $n1 = 0;
                foreach ($this->recallConfigs as $item1) {
                    $res['RecallConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MergeConfig'])) {
            $model->mergeConfig = mergeConfig::fromMap($map['MergeConfig']);
        }

        if (isset($map['RecallConfigs'])) {
            if (!empty($map['RecallConfigs'])) {
                $model->recallConfigs = [];
                $n1 = 0;
                foreach ($map['RecallConfigs'] as $item1) {
                    $model->recallConfigs[$n1] = recallConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
