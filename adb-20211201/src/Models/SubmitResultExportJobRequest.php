<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SubmitResultExportJobRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example amv-bp10a0ng21t5****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The engine that is used to execute the result set export job. Set the value to XIHE.
     *
     * @example XIHE
     *
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $exportType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the resource group that runs the result set export job.
     *
     * @example user_default
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The SQL statement that is used in the result set export job. You can specify only SELECT statements. If you specify other SQL statements, the request fails.
     *
     * This parameter is required.
     * @example SELECT * FROM `fotor_com_datastore_resource`.`fotor_ai_create_task` where `date` = \\"2023-05-13\\" LIMIT 10;
     *
     * @var string
     */
    public $SQL;

    /**
     * @description The name of the database.
     *
     * This parameter is required.
     * @example tpch_oss
     *
     * @var string
     */
    public $schema;
    protected $_name = [
        'DBClusterId'   => 'DBClusterId',
        'engine'        => 'Engine',
        'exportType'    => 'ExportType',
        'regionId'      => 'RegionId',
        'resourceGroup' => 'ResourceGroup',
        'SQL'           => 'SQL',
        'schema'        => 'Schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitResultExportJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}
