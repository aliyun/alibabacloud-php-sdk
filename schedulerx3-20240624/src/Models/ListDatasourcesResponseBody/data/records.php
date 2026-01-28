<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListDatasourcesResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $connectionParams;

    /**
     * @var int
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $updater;
    protected $_name = [
        'connectionParams' => 'ConnectionParams',
        'datasourceId' => 'DatasourceId',
        'description' => 'Description',
        'name' => 'Name',
        'type' => 'Type',
        'updater' => 'Updater',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionParams) {
            $res['ConnectionParams'] = $this->connectionParams;
        }

        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updater) {
            $res['Updater'] = $this->updater;
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
        if (isset($map['ConnectionParams'])) {
            $model->connectionParams = $map['ConnectionParams'];
        }

        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Updater'])) {
            $model->updater = $map['Updater'];
        }

        return $model;
    }
}
