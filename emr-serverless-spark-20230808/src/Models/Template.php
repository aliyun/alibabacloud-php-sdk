<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class Template extends Model
{
    /**
     * @var int
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $modifier;

    /**
     * @var SparkConf[]
     */
    public $sparkConf;

    /**
     * @var int
     */
    public $sparkDriverCores;

    /**
     * @var int
     */
    public $sparkDriverMemory;

    /**
     * @var int
     */
    public $sparkExecutorCores;

    /**
     * @var int
     */
    public $sparkExecutorMemory;

    /**
     * @var string
     */
    public $sparkLogLevel;

    /**
     * @var string
     */
    public $sparkLogPath;

    /**
     * @var string
     */
    public $sparkVersion;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'creator'             => 'creator',
        'gmtCreated'          => 'gmtCreated',
        'gmtModified'         => 'gmtModified',
        'modifier'            => 'modifier',
        'sparkConf'           => 'sparkConf',
        'sparkDriverCores'    => 'sparkDriverCores',
        'sparkDriverMemory'   => 'sparkDriverMemory',
        'sparkExecutorCores'  => 'sparkExecutorCores',
        'sparkExecutorMemory' => 'sparkExecutorMemory',
        'sparkLogLevel'       => 'sparkLogLevel',
        'sparkLogPath'        => 'sparkLogPath',
        'sparkVersion'        => 'sparkVersion',
        'templateType'        => 'templateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->gmtCreated) {
            $res['gmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->sparkConf) {
            $res['sparkConf'] = [];
            if (null !== $this->sparkConf && \is_array($this->sparkConf)) {
                $n = 0;
                foreach ($this->sparkConf as $item) {
                    $res['sparkConf'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sparkDriverCores) {
            $res['sparkDriverCores'] = $this->sparkDriverCores;
        }
        if (null !== $this->sparkDriverMemory) {
            $res['sparkDriverMemory'] = $this->sparkDriverMemory;
        }
        if (null !== $this->sparkExecutorCores) {
            $res['sparkExecutorCores'] = $this->sparkExecutorCores;
        }
        if (null !== $this->sparkExecutorMemory) {
            $res['sparkExecutorMemory'] = $this->sparkExecutorMemory;
        }
        if (null !== $this->sparkLogLevel) {
            $res['sparkLogLevel'] = $this->sparkLogLevel;
        }
        if (null !== $this->sparkLogPath) {
            $res['sparkLogPath'] = $this->sparkLogPath;
        }
        if (null !== $this->sparkVersion) {
            $res['sparkVersion'] = $this->sparkVersion;
        }
        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['gmtCreated'])) {
            $model->gmtCreated = $map['gmtCreated'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['sparkConf'])) {
            if (!empty($map['sparkConf'])) {
                $model->sparkConf = [];
                $n                = 0;
                foreach ($map['sparkConf'] as $item) {
                    $model->sparkConf[$n++] = null !== $item ? SparkConf::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sparkDriverCores'])) {
            $model->sparkDriverCores = $map['sparkDriverCores'];
        }
        if (isset($map['sparkDriverMemory'])) {
            $model->sparkDriverMemory = $map['sparkDriverMemory'];
        }
        if (isset($map['sparkExecutorCores'])) {
            $model->sparkExecutorCores = $map['sparkExecutorCores'];
        }
        if (isset($map['sparkExecutorMemory'])) {
            $model->sparkExecutorMemory = $map['sparkExecutorMemory'];
        }
        if (isset($map['sparkLogLevel'])) {
            $model->sparkLogLevel = $map['sparkLogLevel'];
        }
        if (isset($map['sparkLogPath'])) {
            $model->sparkLogPath = $map['sparkLogPath'];
        }
        if (isset($map['sparkVersion'])) {
            $model->sparkVersion = $map['sparkVersion'];
        }
        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }

        return $model;
    }
}
