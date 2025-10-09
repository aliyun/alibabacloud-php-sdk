<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityScanRequest\computeResource;

use AlibabaCloud\Dara\Model;

class runtime extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var mixed[]
     */
    public $hiveConf;

    /**
     * @var mixed[]
     */
    public $sparkConf;
    protected $_name = [
        'engine' => 'Engine',
        'hiveConf' => 'HiveConf',
        'sparkConf' => 'SparkConf',
    ];

    public function validate()
    {
        if (\is_array($this->hiveConf)) {
            Model::validateArray($this->hiveConf);
        }
        if (\is_array($this->sparkConf)) {
            Model::validateArray($this->sparkConf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->hiveConf) {
            if (\is_array($this->hiveConf)) {
                $res['HiveConf'] = [];
                foreach ($this->hiveConf as $key1 => $value1) {
                    $res['HiveConf'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sparkConf) {
            if (\is_array($this->sparkConf)) {
                $res['SparkConf'] = [];
                foreach ($this->sparkConf as $key1 => $value1) {
                    $res['SparkConf'][$key1] = $value1;
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['HiveConf'])) {
            if (!empty($map['HiveConf'])) {
                $model->hiveConf = [];
                foreach ($map['HiveConf'] as $key1 => $value1) {
                    $model->hiveConf[$key1] = $value1;
                }
            }
        }

        if (isset($map['SparkConf'])) {
            if (!empty($map['SparkConf'])) {
                $model->sparkConf = [];
                foreach ($map['SparkConf'] as $key1 => $value1) {
                    $model->sparkConf[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
