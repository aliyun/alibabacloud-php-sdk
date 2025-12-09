<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest;

use AlibabaCloud\Dara\Model;

class dataSource extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dmsDatabaseId;

    /**
     * @var string
     */
    public $dmsInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'dataSourceType' => 'DataSourceType',
        'database' => 'Database',
        'dbName' => 'DbName',
        'dmsDatabaseId' => 'DmsDatabaseId',
        'dmsInstanceId' => 'DmsInstanceId',
        'engine' => 'Engine',
        'fileId' => 'FileId',
        'location' => 'Location',
        'regionId' => 'RegionId',
        'tables' => 'Tables',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dmsDatabaseId) {
            $res['DmsDatabaseId'] = $this->dmsDatabaseId;
        }

        if (null !== $this->dmsInstanceId) {
            $res['DmsInstanceId'] = $this->dmsInstanceId;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DmsDatabaseId'])) {
            $model->dmsDatabaseId = $map['DmsDatabaseId'];
        }

        if (isset($map['DmsInstanceId'])) {
            $model->dmsInstanceId = $map['DmsInstanceId'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
