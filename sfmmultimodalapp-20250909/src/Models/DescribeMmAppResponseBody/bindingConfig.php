<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody\bindingConfig\commands;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody\bindingConfig\mcps;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody\bindingConfig\ragConfig;

class bindingConfig extends Model
{
    /**
     * @var commands[]
     */
    public $commands;

    /**
     * @var mcps[]
     */
    public $mcps;

    /**
     * @var ragConfig
     */
    public $ragConfig;
    protected $_name = [
        'commands' => 'Commands',
        'mcps' => 'Mcps',
        'ragConfig' => 'RagConfig',
    ];

    public function validate()
    {
        if (\is_array($this->commands)) {
            Model::validateArray($this->commands);
        }
        if (\is_array($this->mcps)) {
            Model::validateArray($this->mcps);
        }
        if (null !== $this->ragConfig) {
            $this->ragConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commands) {
            if (\is_array($this->commands)) {
                $res['Commands'] = [];
                $n1 = 0;
                foreach ($this->commands as $item1) {
                    $res['Commands'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mcps) {
            if (\is_array($this->mcps)) {
                $res['Mcps'] = [];
                $n1 = 0;
                foreach ($this->mcps as $item1) {
                    $res['Mcps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ragConfig) {
            $res['RagConfig'] = null !== $this->ragConfig ? $this->ragConfig->toArray($noStream) : $this->ragConfig;
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
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n1 = 0;
                foreach ($map['Commands'] as $item1) {
                    $model->commands[$n1] = commands::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mcps'])) {
            if (!empty($map['Mcps'])) {
                $model->mcps = [];
                $n1 = 0;
                foreach ($map['Mcps'] as $item1) {
                    $model->mcps[$n1] = mcps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RagConfig'])) {
            $model->ragConfig = ragConfig::fromMap($map['RagConfig']);
        }

        return $model;
    }
}
