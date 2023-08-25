<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkSQLEngineStateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Spark application.
     *
     * @example s202207151211hz0c****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The configuration of the Spark application.
     *
     * @example {"key1": "value1", "key2": "value2"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The third-party JAR package.
     *
     * @example oss://test-bucket/test.jar
     *
     * @var string
     */
    public $jars;

    /**
     * @description The maximum number of started Spark executors.
     *
     * @example 3
     *
     * @var string
     */
    public $maxExecutor;

    /**
     * @description The minimum number of started Spark executors.
     *
     * @example 1
     *
     * @var string
     */
    public $minExecutor;

    /**
     * @description The slot number of the Spark application.
     *
     * @example 2
     *
     * @var string
     */
    public $slotNum;

    /**
     * @description The execution state of the application. Valid values:
     *
     *   SUBMITTED
     *   STARTING
     *   RUNNING
     *   FAILING
     *   FAILED
     *   KILLING
     *   KILLED
     *   SUCCEEDING
     *   COMPLETED
     *   FATAL
     *   UNKNOWN
     *
     * @example COMPLETED
     *
     * @var string
     */
    public $state;

    /**
     * @description The timestamp when the Spark SQL application was submitted. Unit: milliseconds.
     *
     * @example 1651213645000
     *
     * @var string
     */
    public $submittedTimeInMillis;
    protected $_name = [
        'appId'                 => 'AppId',
        'config'                => 'Config',
        'jars'                  => 'Jars',
        'maxExecutor'           => 'MaxExecutor',
        'minExecutor'           => 'MinExecutor',
        'slotNum'               => 'SlotNum',
        'state'                 => 'State',
        'submittedTimeInMillis' => 'SubmittedTimeInMillis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->jars) {
            $res['Jars'] = $this->jars;
        }
        if (null !== $this->maxExecutor) {
            $res['MaxExecutor'] = $this->maxExecutor;
        }
        if (null !== $this->minExecutor) {
            $res['MinExecutor'] = $this->minExecutor;
        }
        if (null !== $this->slotNum) {
            $res['SlotNum'] = $this->slotNum;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->submittedTimeInMillis) {
            $res['SubmittedTimeInMillis'] = $this->submittedTimeInMillis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Jars'])) {
            $model->jars = $map['Jars'];
        }
        if (isset($map['MaxExecutor'])) {
            $model->maxExecutor = $map['MaxExecutor'];
        }
        if (isset($map['MinExecutor'])) {
            $model->minExecutor = $map['MinExecutor'];
        }
        if (isset($map['SlotNum'])) {
            $model->slotNum = $map['SlotNum'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubmittedTimeInMillis'])) {
            $model->submittedTimeInMillis = $map['SubmittedTimeInMillis'];
        }

        return $model;
    }
}
