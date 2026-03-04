<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListYikeAssetFoldersResponseBody;

use AlibabaCloud\Dara\Model;

class folderList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $productionId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'folderId' => 'FolderId',
        'folderName' => 'FolderName',
        'isDefault' => 'IsDefault',
        'productionId' => 'ProductionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
