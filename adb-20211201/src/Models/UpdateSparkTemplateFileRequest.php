<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class UpdateSparkTemplateFileRequest extends Model
{
    /**
     * @description The template data to be updated.
     *
     * >  If you do not specify this parameter, the application template is not updated. For information about how to configure a Spark application template, see [Configure a Spark application](~~452402~~).
     * @example set spark.driver.resourceSpec=medium;set spark.executor.instances=2;set spark.executor.resourceSpec=medium;set spark.app.name=Spark SQL Test;
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-pz5vp4585l466****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The application template ID.
     *
     * >  You can call the [GetSparkTemplateFullTree](~~456205~~) operation to query the application template ID.
     * @example 718056
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the job resource group.
     *
     * @example adb
     *
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'content'           => 'Content',
        'DBClusterId'       => 'DBClusterId',
        'id'                => 'Id',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSparkTemplateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
