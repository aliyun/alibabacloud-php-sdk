<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CheckEngineMetaPartitionRequest extends Model
{
    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $partition;

    /**
     * @var string
     */
    public $dataSourceType;
    protected $_name = [
        'tableGuid'      => 'TableGuid',
        'partition'      => 'Partition',
        'dataSourceType' => 'DataSourceType',
    ];

    public function validate()
    {
        Model::validateRequired('tableGuid', $this->tableGuid, true);
        Model::validateRequired('partition', $this->partition, true);
        Model::validateRequired('dataSourceType', $this->dataSourceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckEngineMetaPartitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        return $model;
    }
}
