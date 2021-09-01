<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CheckEngineMetaTableRequest extends Model
{
    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $dataSourceType;
    protected $_name = [
        'tableGuid'      => 'TableGuid',
        'dataSourceType' => 'DataSourceType',
    ];

    public function validate()
    {
        Model::validateRequired('tableGuid', $this->tableGuid, true);
        Model::validateRequired('dataSourceType', $this->dataSourceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckEngineMetaTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        return $model;
    }
}
