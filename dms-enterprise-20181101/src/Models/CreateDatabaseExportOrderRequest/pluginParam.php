<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest\pluginParam\config;
use AlibabaCloud\Tea\Model;

class pluginParam extends Model
{
    /**
     * @description The reason for the database export.
     *
     * This parameter is required.
     * @example document_test
     *
     * @var string
     */
    public $classify;

    /**
     * @description The configurations for database export.
     *
     * This parameter is required.
     * @var config
     */
    public $config;

    /**
     * @description The database ID.
     *
     * This parameter is required.
     * @example 17****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example 137****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   **true**
     *   **false**
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The name that is used to search for the database.
     *
     * This parameter is required.
     * @example test@xxx.xxx.xxx.xxx:3306
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'classify'   => 'Classify',
        'config'     => 'Config',
        'dbId'       => 'DbId',
        'instanceId' => 'InstanceId',
        'logic'      => 'Logic',
        'searchName' => 'SearchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
