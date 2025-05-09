<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDatabaseExportOrderRequest\pluginParam\config;

class pluginParam extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var config
     */
    public $config;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $searchName;
    protected $_name = [
        'classify' => 'Classify',
        'config' => 'Config',
        'dbId' => 'DbId',
        'instanceId' => 'InstanceId',
        'logic' => 'Logic',
        'searchName' => 'SearchName',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
