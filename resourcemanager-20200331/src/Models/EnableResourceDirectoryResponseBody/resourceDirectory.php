<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceDirectoryResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDirectory extends Model
{
    /**
     * @example 2021-12-08T02:15:31.744Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 507408460615****
     *
     * @var string
     */
    public $masterAccountId;

    /**
     * @example alice@example.com
     *
     * @var string
     */
    public $masterAccountName;

    /**
     * @example rd-54****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @example r-G9****
     *
     * @var string
     */
    public $rootFolderId;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'masterAccountId'     => 'MasterAccountId',
        'masterAccountName'   => 'MasterAccountName',
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'rootFolderId'        => 'RootFolderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->masterAccountId) {
            $res['MasterAccountId'] = $this->masterAccountId;
        }
        if (null !== $this->masterAccountName) {
            $res['MasterAccountName'] = $this->masterAccountName;
        }
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->rootFolderId) {
            $res['RootFolderId'] = $this->rootFolderId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MasterAccountId'])) {
            $model->masterAccountId = $map['MasterAccountId'];
        }
        if (isset($map['MasterAccountName'])) {
            $model->masterAccountName = $map['MasterAccountName'];
        }
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['RootFolderId'])) {
            $model->rootFolderId = $map['RootFolderId'];
        }

        return $model;
    }
}
