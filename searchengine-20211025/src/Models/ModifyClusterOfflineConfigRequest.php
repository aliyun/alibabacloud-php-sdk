<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ModifyClusterOfflineConfigRequest extends Model
{
    /**
     * @var string
     */
    public $buildMode;

    /**
     * @var int[]
     */
    public $config;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var int
     */
    public $dataTimeSec;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var string
     */
    public $partition;

    /**
     * @var string
     */
    public $pushMode;
    protected $_name = [
        'buildMode' => 'buildMode',
        'config' => 'config',
        'dataSourceName' => 'dataSourceName',
        'dataSourceType' => 'dataSourceType',
        'dataTimeSec' => 'dataTimeSec',
        'domain' => 'domain',
        'generation' => 'generation',
        'partition' => 'partition',
        'pushMode' => 'pushMode',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildMode) {
            $res['buildMode'] = $this->buildMode;
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->pushMode) {
            $res['pushMode'] = $this->pushMode;
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
        if (isset($map['buildMode'])) {
            $model->buildMode = $map['buildMode'];
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }

        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }

        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['pushMode'])) {
            $model->pushMode = $map['pushMode'];
        }

        return $model;
    }
}
