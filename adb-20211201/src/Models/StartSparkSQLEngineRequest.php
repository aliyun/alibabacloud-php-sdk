<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class StartSparkSQLEngineRequest extends Model
{
    /**
     * @description The configuration that is required to start the Spark SQL engine. Specify this value in the JSON format. For more information, see [Conf configuration parameters](https://help.aliyun.com/document_detail/471203.html).
     *
     * @example { "spark.shuffle.timeout": ":0s" }
     *
     * @var string
     */
    public $config;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example amv-abcd****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The Object Storage Service (OSS) paths of third-party JAR packages that are required to start the Spark SQL engine. Separate multiple OSS paths with commas (,).
     *
     * @example oss://testBuckname/test.jar,oss://testBuckname/test2.jar
     *
     * @var string
     */
    public $jars;

    /**
     * @description The maximum number of executors that are required to execute SQL statements. Valid values: 1 to 2000. If this value exceeds the total number of executes that are supported by the resource group, the Spark SQL engine fails to be started.
     *
     * @example 10
     *
     * @var int
     */
    public $maxExecutor;

    /**
     * @description The minimum number of executors that are required to execute SQL statements. Valid values: 0 to 2000. A value of 0 indicates that no executors are permanent if no SQL statements are executed. If this value exceeds the total number of executors that are supported by the resource group, the Spark SQL engine fails to be started. The value must be less than the value of MaxExecutor.
     *
     * @example 1
     *
     * @var int
     */
    public $minExecutor;

    /**
     * @description The name of the resource group.
     *
     * This parameter is required.
     * @example spark-rg-name
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The maximum number of slots that are required to maintain Spark sessions for executing SQL statements. Valid values: 1 to 500.
     *
     * @example 100
     *
     * @var int
     */
    public $slotNum;
    protected $_name = [
        'config'            => 'Config',
        'DBClusterId'       => 'DBClusterId',
        'jars'              => 'Jars',
        'maxExecutor'       => 'MaxExecutor',
        'minExecutor'       => 'MinExecutor',
        'resourceGroupName' => 'ResourceGroupName',
        'slotNum'           => 'SlotNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->slotNum) {
            $res['SlotNum'] = $this->slotNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartSparkSQLEngineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['SlotNum'])) {
            $model->slotNum = $map['SlotNum'];
        }

        return $model;
    }
}
