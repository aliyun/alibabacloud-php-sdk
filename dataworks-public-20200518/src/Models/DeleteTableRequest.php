<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteTableRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var string
     */
    public $appGuid;
    protected $_name = [
        'projectId' => 'ProjectId',
        'tableName' => 'TableName',
        'envType'   => 'EnvType',
        'appGuid'   => 'AppGuid',
    ];

    public function validate()
    {
        Model::validateRequired('tableName', $this->tableName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }

        return $model;
    }
}
