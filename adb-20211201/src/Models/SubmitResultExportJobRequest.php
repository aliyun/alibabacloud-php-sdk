<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SubmitResultExportJobRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $exportType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $SQL;

    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'engine' => 'Engine',
        'exportType' => 'ExportType',
        'regionId' => 'RegionId',
        'resourceGroup' => 'ResourceGroup',
        'SQL' => 'SQL',
        'schema' => 'Schema',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
