<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRunConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRunConfigurationResponseBody\runConfiguration\applicationConfigs;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRunConfigurationResponseBody\runConfiguration\logConfig;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Tag;

class runConfiguration extends Model
{
    /**
     * @var applicationConfigs[]
     */
    public $applicationConfigs;

    /**
     * @var logConfig
     */
    public $logConfig;

    /**
     * @var Tag[]
     */
    public $runtimeConfigs;
    protected $_name = [
        'applicationConfigs' => 'applicationConfigs',
        'logConfig' => 'logConfig',
        'runtimeConfigs' => 'runtimeConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->applicationConfigs)) {
            Model::validateArray($this->applicationConfigs);
        }
        if (null !== $this->logConfig) {
            $this->logConfig->validate();
        }
        if (\is_array($this->runtimeConfigs)) {
            Model::validateArray($this->runtimeConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            if (\is_array($this->applicationConfigs)) {
                $res['applicationConfigs'] = [];
                $n1 = 0;
                foreach ($this->applicationConfigs as $item1) {
                    $res['applicationConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toArray($noStream) : $this->logConfig;
        }

        if (null !== $this->runtimeConfigs) {
            if (\is_array($this->runtimeConfigs)) {
                $res['runtimeConfigs'] = [];
                $n1 = 0;
                foreach ($this->runtimeConfigs as $item1) {
                    $res['runtimeConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['applicationConfigs'])) {
            if (!empty($map['applicationConfigs'])) {
                $model->applicationConfigs = [];
                $n1 = 0;
                foreach ($map['applicationConfigs'] as $item1) {
                    $model->applicationConfigs[$n1] = applicationConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['logConfig'])) {
            $model->logConfig = logConfig::fromMap($map['logConfig']);
        }

        if (isset($map['runtimeConfigs'])) {
            if (!empty($map['runtimeConfigs'])) {
                $model->runtimeConfigs = [];
                $n1 = 0;
                foreach ($map['runtimeConfigs'] as $item1) {
                    $model->runtimeConfigs[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
