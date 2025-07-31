<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanResponseBody\dataQualityScan\computeResource;

use AlibabaCloud\Tea\Model;

class runtime extends Model
{
    /**
     * @example Hive
     *
     * @var string
     */
    public $engine;

    /**
     * @example mapreduce.job.queuename=dq_queue
     *
     * @var mixed[]
     */
    public $hiveConf;

    /**
     * @example spark.yarn.queue=dq_queue
     *
     * @var mixed[]
     */
    public $sparkConf;
    protected $_name = [
        'engine' => 'Engine',
        'hiveConf' => 'HiveConf',
        'sparkConf' => 'SparkConf',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return runtime
     */
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
