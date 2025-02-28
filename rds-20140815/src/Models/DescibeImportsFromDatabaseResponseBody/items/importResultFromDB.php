<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponseBody\items;

use AlibabaCloud\Dara\Model;

class importResultFromDB extends Model
{
    /**
     * @var string
     */
    public $importDataStatus;
    /**
     * @var string
     */
    public $importDataStatusDescription;
    /**
     * @var string
     */
    public $importDataType;
    /**
     * @var int
     */
    public $importId;
    /**
     * @var string
     */
    public $incrementalImportingTime;
    protected $_name = [
        'importDataStatus'            => 'ImportDataStatus',
        'importDataStatusDescription' => 'ImportDataStatusDescription',
        'importDataType'              => 'ImportDataType',
        'importId'                    => 'ImportId',
        'incrementalImportingTime'    => 'IncrementalImportingTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importDataStatus) {
            $res['ImportDataStatus'] = $this->importDataStatus;
        }

        if (null !== $this->importDataStatusDescription) {
            $res['ImportDataStatusDescription'] = $this->importDataStatusDescription;
        }

        if (null !== $this->importDataType) {
            $res['ImportDataType'] = $this->importDataType;
        }

        if (null !== $this->importId) {
            $res['ImportId'] = $this->importId;
        }

        if (null !== $this->incrementalImportingTime) {
            $res['IncrementalImportingTime'] = $this->incrementalImportingTime;
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
        if (isset($map['ImportDataStatus'])) {
            $model->importDataStatus = $map['ImportDataStatus'];
        }

        if (isset($map['ImportDataStatusDescription'])) {
            $model->importDataStatusDescription = $map['ImportDataStatusDescription'];
        }

        if (isset($map['ImportDataType'])) {
            $model->importDataType = $map['ImportDataType'];
        }

        if (isset($map['ImportId'])) {
            $model->importId = $map['ImportId'];
        }

        if (isset($map['IncrementalImportingTime'])) {
            $model->incrementalImportingTime = $map['IncrementalImportingTime'];
        }

        return $model;
    }
}
