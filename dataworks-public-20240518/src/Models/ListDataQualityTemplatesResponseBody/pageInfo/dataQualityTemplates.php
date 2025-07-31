<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityTemplatesResponseBody\pageInfo;

use AlibabaCloud\Tea\Model;

class dataQualityTemplates extends Model
{
    /**
     * @example 1729816478147
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 7892346529452
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 819cf1f8-29be-4f94-a9d0-c5c06c0c3d2a
     *
     * @var string
     */
    public $id;

    /**
     * @example 1729816478147
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example 205250754596036836
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @example 205250754596036836
     *
     * @var string
     */
    public $owner;

    /**
     * @example 7635
     *
     * @var int
     */
    public $projectId;

    /**
     * @example {
     * "assertion": "anomaly detection fro id_not_null_cnt",
     * "id_not_null_cnt": {
     * "query": "SELECT COUNT(*) AS cnt FROM ${tableName} WHERE dt = \\"$[yyyymmdd-1]\\";"
     * },
     * "identity": "819cf1f8-29be-4f94-a9d0-c5c06c0c3d2a"
     * }
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'spec' => 'Spec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataQualityTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
