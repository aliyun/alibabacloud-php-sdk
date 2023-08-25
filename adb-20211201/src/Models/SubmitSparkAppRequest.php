<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SubmitSparkAppRequest extends Model
{
    /**
     * @description The type of the client. The value can be up to 64 characters in length.
     *
     * @example CONSOLE
     *
     * @var string
     */
    public $agentSource;

    /**
     * @description The version of the client. The value can be up to 64 characters in length.
     *
     * @example 1.091
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @description The name of the application. The value can be up to 64 characters in length.
     *
     * @example TestApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The type of the application. Valid values:
     *
     *   **SQL**
     *   **STREAMING**
     *   **BATCH** (default)
     *
     * @example SQL
     *
     * @var string
     */
    public $appType;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * > You can call the [DescribeDBClusters](~~454250~~) operation to query cluster IDs.
     * @example amv-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The data of the application template.
     *
     * > For information about the application template configuration, see [Spark application configuration guide](~~452402~~).
     * @example conf spark.driver.resourceSpec=small; conf spark.executor.instances=1; conf spark.executor.resourceSpec=small; conf spark.app.name=TestApp;
     *
     * @var string
     */
    public $data;

    /**
     * @description The name of the job resource group.
     *
     * > You can call the [DescribeDBResourceGroup](~~612413~~) operation to query the resource group IDs of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     * @example adb
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The ID of the application template.
     *
     * > You can call the [GetSparkTemplateFullTree](~~456205~~) operation to query the application template ID.
     * @example 15
     *
     * @var int
     */
    public $templateFileId;
    protected $_name = [
        'agentSource'       => 'AgentSource',
        'agentVersion'      => 'AgentVersion',
        'appName'           => 'AppName',
        'appType'           => 'AppType',
        'DBClusterId'       => 'DBClusterId',
        'data'              => 'Data',
        'resourceGroupName' => 'ResourceGroupName',
        'templateFileId'    => 'TemplateFileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentSource) {
            $res['AgentSource'] = $this->agentSource;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->templateFileId) {
            $res['TemplateFileId'] = $this->templateFileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSparkAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentSource'])) {
            $model->agentSource = $map['AgentSource'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['TemplateFileId'])) {
            $model->templateFileId = $map['TemplateFileId'];
        }

        return $model;
    }
}
