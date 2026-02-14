<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataCenterDatabaseResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $databaseDesc;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $descUpdateTime;

    /**
     * @var int
     */
    public $dmsDbId;

    /**
     * @var int
     */
    public $dmsInstanceId;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $importType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $isInternal;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'databaseDesc' => 'DatabaseDesc',
        'databaseName' => 'DatabaseName',
        'dbId' => 'DbId',
        'dbType' => 'DbType',
        'descUpdateTime' => 'DescUpdateTime',
        'dmsDbId' => 'DmsDbId',
        'dmsInstanceId' => 'DmsInstanceId',
        'gmtCreated' => 'GmtCreated',
        'importType' => 'ImportType',
        'instanceName' => 'InstanceName',
        'isInternal' => 'IsInternal',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseDesc) {
            $res['DatabaseDesc'] = $this->databaseDesc;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->descUpdateTime) {
            $res['DescUpdateTime'] = $this->descUpdateTime;
        }

        if (null !== $this->dmsDbId) {
            $res['DmsDbId'] = $this->dmsDbId;
        }

        if (null !== $this->dmsInstanceId) {
            $res['DmsInstanceId'] = $this->dmsInstanceId;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->importType) {
            $res['ImportType'] = $this->importType;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isInternal) {
            $res['IsInternal'] = $this->isInternal;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['DatabaseDesc'])) {
            $model->databaseDesc = $map['DatabaseDesc'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['DescUpdateTime'])) {
            $model->descUpdateTime = $map['DescUpdateTime'];
        }

        if (isset($map['DmsDbId'])) {
            $model->dmsDbId = $map['DmsDbId'];
        }

        if (isset($map['DmsInstanceId'])) {
            $model->dmsInstanceId = $map['DmsInstanceId'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['ImportType'])) {
            $model->importType = $map['ImportType'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsInternal'])) {
            $model->isInternal = $map['IsInternal'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
