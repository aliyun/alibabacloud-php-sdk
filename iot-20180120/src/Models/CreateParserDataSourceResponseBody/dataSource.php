<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateParserDataSourceResponseBody;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @example 1001
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example DataSource
     *
     * @var string
     */
    public $name;

    /**
     * @example 2022-03-27T12:45:43.000Z
     *
     * @var string
     */
    public $utcCreated;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'description'  => 'Description',
        'name'         => 'Name',
        'utcCreated'   => 'UtcCreated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->utcCreated) {
            $res['UtcCreated'] = $this->utcCreated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UtcCreated'])) {
            $model->utcCreated = $map['UtcCreated'];
        }

        return $model;
    }
}
