<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class LogtailPipelineConfig extends Model
{
    /**
     * @var mixed[][]
     */
    public $aggregators;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var mixed[][]
     */
    public $flushers;

    /**
     * @var mixed[]
     */
    public $global;

    /**
     * @var mixed[][]
     */
    public $inputs;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $logSample;

    /**
     * @var mixed[][]
     */
    public $processors;
    protected $_name = [
        'aggregators' => 'aggregators',
        'configName' => 'configName',
        'createTime' => 'createTime',
        'flushers' => 'flushers',
        'global' => 'global',
        'inputs' => 'inputs',
        'lastModifyTime' => 'lastModifyTime',
        'logSample' => 'logSample',
        'processors' => 'processors',
    ];

    public function validate()
    {
        if (\is_array($this->aggregators)) {
            Model::validateArray($this->aggregators);
        }
        if (\is_array($this->flushers)) {
            Model::validateArray($this->flushers);
        }
        if (\is_array($this->global)) {
            Model::validateArray($this->global);
        }
        if (\is_array($this->inputs)) {
            Model::validateArray($this->inputs);
        }
        if (\is_array($this->processors)) {
            Model::validateArray($this->processors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregators) {
            if (\is_array($this->aggregators)) {
                $res['aggregators'] = [];
                $n1 = 0;
                foreach ($this->aggregators as $item1) {
                    if (\is_array($item1)) {
                        $res['aggregators'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['aggregators'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->flushers) {
            if (\is_array($this->flushers)) {
                $res['flushers'] = [];
                $n1 = 0;
                foreach ($this->flushers as $item1) {
                    if (\is_array($item1)) {
                        $res['flushers'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['flushers'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->global) {
            if (\is_array($this->global)) {
                $res['global'] = [];
                foreach ($this->global as $key1 => $value1) {
                    $res['global'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->inputs) {
            if (\is_array($this->inputs)) {
                $res['inputs'] = [];
                $n1 = 0;
                foreach ($this->inputs as $item1) {
                    if (\is_array($item1)) {
                        $res['inputs'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['inputs'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->logSample) {
            $res['logSample'] = $this->logSample;
        }

        if (null !== $this->processors) {
            if (\is_array($this->processors)) {
                $res['processors'] = [];
                $n1 = 0;
                foreach ($this->processors as $item1) {
                    if (\is_array($item1)) {
                        $res['processors'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['processors'][$n1++][$key2] = $value2;
                        }
                    }
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
        if (isset($map['aggregators'])) {
            if (!empty($map['aggregators'])) {
                $model->aggregators = [];
                $n1 = 0;
                foreach ($map['aggregators'] as $item1) {
                    if (!empty($item1)) {
                        $model->aggregators[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->aggregators[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['flushers'])) {
            if (!empty($map['flushers'])) {
                $model->flushers = [];
                $n1 = 0;
                foreach ($map['flushers'] as $item1) {
                    if (!empty($item1)) {
                        $model->flushers[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->flushers[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['global'])) {
            if (!empty($map['global'])) {
                $model->global = [];
                foreach ($map['global'] as $key1 => $value1) {
                    $model->global[$key1] = $value1;
                }
            }
        }

        if (isset($map['inputs'])) {
            if (!empty($map['inputs'])) {
                $model->inputs = [];
                $n1 = 0;
                foreach ($map['inputs'] as $item1) {
                    if (!empty($item1)) {
                        $model->inputs[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->inputs[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }

        if (isset($map['logSample'])) {
            $model->logSample = $map['logSample'];
        }

        if (isset($map['processors'])) {
            if (!empty($map['processors'])) {
                $model->processors = [];
                $n1 = 0;
                foreach ($map['processors'] as $item1) {
                    if (!empty($item1)) {
                        $model->processors[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->processors[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
