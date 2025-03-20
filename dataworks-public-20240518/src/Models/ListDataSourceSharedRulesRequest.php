<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDataSourceSharedRulesRequest extends Model
{
    /**
     * @description The data source ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description The ID of the workspace to which the data source is shared. You cannot share the data source to the workspace with which the data source is associated.
     *
     * @example 1
     *
     * @var int
     */
    public $targetProjectId;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'targetProjectId' => 'TargetProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->targetProjectId) {
            $res['TargetProjectId'] = $this->targetProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataSourceSharedRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['TargetProjectId'])) {
            $model->targetProjectId = $map['TargetProjectId'];
        }

        return $model;
    }
}
