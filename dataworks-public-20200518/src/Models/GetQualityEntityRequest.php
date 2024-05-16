<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetQualityEntityRequest extends Model
{
    /**
     * @description The type of the compute engine instance or data source.
     *
     * This parameter is required.
     * @example odps
     *
     * @var string
     */
    public $envType;

    /**
     * @description The partition filter expression.
     *
     * @example dt=$[yyyymmdd]
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the compute engine instance or data source. You can obtain the name from data source configurations.
     *
     * This parameter is required.
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the partitioned table. You can call the [GetMetaTablePartition](https://help.aliyun.com/document_detail/173923.html) operation to obtain the name.
     *
     * This parameter is required.
     * @example dual
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'envType'         => 'EnvType',
        'matchExpression' => 'MatchExpression',
        'projectId'       => 'ProjectId',
        'projectName'     => 'ProjectName',
        'tableName'       => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualityEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
