<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceDirectoryResponse;

use AlibabaCloud\Tea\Model;

class resourceDirectory extends Model
{
    /**
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @var string
     */
    public $masterAccountName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $rootFolderId;

    /**
     * @var string
     */
    public $masterAccountId;
    protected $_name = [
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'masterAccountName'   => 'MasterAccountName',
        'createTime'          => 'CreateTime',
        'rootFolderId'        => 'RootFolderId',
        'masterAccountId'     => 'MasterAccountId',
    ];

    public function validate()
    {
        Model::validateRequired('resourceDirectoryId', $this->resourceDirectoryId, true);
        Model::validateRequired('masterAccountName', $this->masterAccountName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('rootFolderId', $this->rootFolderId, true);
        Model::validateRequired('masterAccountId', $this->masterAccountId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->masterAccountName) {
            $res['MasterAccountName'] = $this->masterAccountName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->rootFolderId) {
            $res['RootFolderId'] = $this->rootFolderId;
        }
        if (null !== $this->masterAccountId) {
            $res['MasterAccountId'] = $this->masterAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDirectory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['MasterAccountName'])) {
            $model->masterAccountName = $map['MasterAccountName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RootFolderId'])) {
            $model->rootFolderId = $map['RootFolderId'];
        }
        if (isset($map['MasterAccountId'])) {
            $model->masterAccountId = $map['MasterAccountId'];
        }

        return $model;
    }
}
