<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class SubmitDeploymentRequest extends Model
{
    /**
     * @description 实例ID列表
     *
     * @var string
     */
    public $cloudGameInstanceIds;

    /**
     * @description 游戏iD
     *
     * @var string
     */
    public $gameId;

    /**
     * @description 操作类型
     *
     * @var string
     */
    public $operationType;

    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 游戏版本ID
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'cloudGameInstanceIds' => 'CloudGameInstanceIds',
        'gameId'               => 'GameId',
        'operationType'        => 'OperationType',
        'projectId'            => 'ProjectId',
        'versionId'            => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudGameInstanceIds) {
            $res['CloudGameInstanceIds'] = $this->cloudGameInstanceIds;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDeploymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudGameInstanceIds'])) {
            $model->cloudGameInstanceIds = $map['CloudGameInstanceIds'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
