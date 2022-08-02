<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class SubmitDeploymentRequest extends Model
{
    /**
     * @var string
     */
    public $cloudGameInstanceIds;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $projectId;

    /**
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
