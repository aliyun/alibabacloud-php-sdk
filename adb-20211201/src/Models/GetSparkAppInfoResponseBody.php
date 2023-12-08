<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetSparkAppInfoResponseBody extends Model
{
    /**
     * @description The queried Spark application. Fields in the response parameter:
     *
     *   **Data**: the data of the Spark application template.
     *   **EstimateExecutionCpuTimeInSeconds**: the amount of time that is required to consume CPU resources for running the Spark application. Unit: milliseconds.
     *   **LogRootPath**: the storage path of log files.
     *   **LastAttemptId**: the most recent attempt ID.
     *   **WebUiAddress**: the web UI URL.
     *   **SubmittedTimeInMillis**: the time when the Spark application was submitted. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *   **StartedTimeInMillis**: the time when the Spark application was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *   **LastUpdatedTimeInMillis**: the time when the Spark application was last updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *   **TerminatedTimeInMillis**: the time when the Spark application was terminated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *   **DBClusterId**: the ID of the cluster on which the Spark application runs.
     *   **ResourceGroupName**: the name of the job resource group.
     *   **DurationInMillis**: the amount of time that is required to run the Spark application. Unit: milliseconds.
     *
     * @example {     \"name\": \"SparkPi\",     \"file\": \"local:///tmp/spark-examples.jar\",     \"className\": \"org.apache.spark.examples.SparkPi\",     \"args\": [         \"1000000\"     ],     \"conf\": {         \"spark.driver.resourceSpec\": \"small\",         \"spark.executor.instances\": 1,         \"spark.executor.resourceSpec\": \"small\"     } }",
     * }
     * @var SparkAppInfo
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example D65A809F-34CE-4550-9BC1-0ED21ETG380
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSparkAppInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = SparkAppInfo::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
