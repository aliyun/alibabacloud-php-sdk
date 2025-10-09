<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityScansResponseBody\pageInfo\dataQualityScans\computeResource;

use AlibabaCloud\Dara\Model;

class runtime extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $hiveConf;

    /**
     * @var string
     */
    public $sparkConf;
    protected $_name = [
        'engine' => 'Engine',
        'hiveConf' => 'HiveConf',
        'sparkConf' => 'SparkConf',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->hiveConf) {
            $res['HiveConf'] = $this->hiveConf;
        }

        if (null !== $this->sparkConf) {
            $res['SparkConf'] = $this->sparkConf;
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
            $model->hiveConf = $map['HiveConf'];
        }

        if (isset($map['SparkConf'])) {
            $model->sparkConf = $map['SparkConf'];
        }

        return $model;
    }
}
