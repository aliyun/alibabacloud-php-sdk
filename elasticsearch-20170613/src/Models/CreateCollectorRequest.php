<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateCollectorRequest\configs;

class CreateCollectorRequest extends Model
{
    /**
     * @var string[]
     */
    public $collectorPaths;

    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resType;

    /**
     * @var string
     */
    public $resVersion;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'collectorPaths' => 'collectorPaths',
        'configs' => 'configs',
        'dryRun' => 'dryRun',
        'extendConfigs' => 'extendConfigs',
        'name' => 'name',
        'resType' => 'resType',
        'resVersion' => 'resVersion',
        'vpcId' => 'vpcId',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->collectorPaths)) {
            Model::validateArray($this->collectorPaths);
        }
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        if (\is_array($this->extendConfigs)) {
            Model::validateArray($this->extendConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectorPaths) {
            if (\is_array($this->collectorPaths)) {
                $res['collectorPaths'] = [];
                $n1 = 0;
                foreach ($this->collectorPaths as $item1) {
                    $res['collectorPaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['configs'] = [];
                $n1 = 0;
                foreach ($this->configs as $item1) {
                    $res['configs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->extendConfigs) {
            if (\is_array($this->extendConfigs)) {
                $res['extendConfigs'] = [];
                $n1 = 0;
                foreach ($this->extendConfigs as $item1) {
                    if (\is_array($item1)) {
                        $res['extendConfigs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['extendConfigs'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resType) {
            $res['resType'] = $this->resType;
        }

        if (null !== $this->resVersion) {
            $res['resVersion'] = $this->resVersion;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['collectorPaths'])) {
            if (!empty($map['collectorPaths'])) {
                $model->collectorPaths = [];
                $n1 = 0;
                foreach ($map['collectorPaths'] as $item1) {
                    $model->collectorPaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = [];
                $n1 = 0;
                foreach ($map['configs'] as $item1) {
                    $model->configs[$n1] = configs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['extendConfigs'])) {
            if (!empty($map['extendConfigs'])) {
                $model->extendConfigs = [];
                $n1 = 0;
                foreach ($map['extendConfigs'] as $item1) {
                    if (!empty($item1)) {
                        $model->extendConfigs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->extendConfigs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resType'])) {
            $model->resType = $map['resType'];
        }

        if (isset($map['resVersion'])) {
            $model->resVersion = $map['resVersion'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
