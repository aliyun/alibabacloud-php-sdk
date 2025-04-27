<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionRequest\plugins;

class UpgradeEngineVersionRequest extends Model
{
    /**
     * @var plugins[]
     */
    public $plugins;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $updateStrategy;
    protected $_name = [
        'plugins' => 'plugins',
        'type' => 'type',
        'version' => 'version',
        'clientToken' => 'clientToken',
        'dryRun' => 'dryRun',
        'updateStrategy' => 'updateStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->plugins)) {
            Model::validateArray($this->plugins);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->plugins) {
            if (\is_array($this->plugins)) {
                $res['plugins'] = [];
                $n1 = 0;
                foreach ($this->plugins as $item1) {
                    $res['plugins'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['plugins'])) {
            if (!empty($map['plugins'])) {
                $model->plugins = [];
                $n1 = 0;
                foreach ($map['plugins'] as $item1) {
                    $model->plugins[$n1++] = plugins::fromMap($item1);
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['updateStrategy'])) {
            $model->updateStrategy = $map['updateStrategy'];
        }

        return $model;
    }
}
