<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class SubmitSparkJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {     "name": "SparkPi",     "file": "local:///tmp/spark-examples.jar",     "className": "org.apache.spark.examples.SparkPi",     "args": [         "100"     ],     "conf": {         "spark.driver.resourceSpec": "medium",         "spark.executor.instances": 5,         "spark.executor.resourceSpec": "medium"     } }
     *
     * @var string
     */
    public $configJson;

    /**
     * @description This parameter is required.
     *
     * @example MyCluster
     *
     * @var string
     */
    public $vcName;
    protected $_name = [
        'configJson' => 'ConfigJson',
        'vcName'     => 'VcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configJson) {
            $res['ConfigJson'] = $this->configJson;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSparkJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigJson'])) {
            $model->configJson = $map['ConfigJson'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }

        return $model;
    }
}
