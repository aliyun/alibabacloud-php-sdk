<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCollectionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 12373
     *
     * @var int
     */
    public $favoriteId;

    /**
     * @example fe67f61a35a94b7da1a34ba174a7****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $worksId;

    /**
     * @var string
     */
    public $worksName;

    /**
     * @example dashboardOfflineQuery
     *
     * @var string
     */
    public $worksType;

    /**
     * @example 9337d121-a78f-4c1b-a8bc-f81de117****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'favoriteId'    => 'FavoriteId',
        'ownerId'       => 'OwnerId',
        'worksId'       => 'WorksId',
        'worksName'     => 'WorksName',
        'worksType'     => 'WorksType',
        'workspaceId'   => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->favoriteId) {
            $res['FavoriteId'] = $this->favoriteId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }
        if (null !== $this->worksName) {
            $res['WorksName'] = $this->worksName;
        }
        if (null !== $this->worksType) {
            $res['WorksType'] = $this->worksType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FavoriteId'])) {
            $model->favoriteId = $map['FavoriteId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }
        if (isset($map['WorksName'])) {
            $model->worksName = $map['WorksName'];
        }
        if (isset($map['WorksType'])) {
            $model->worksType = $map['WorksType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
