<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ResourceDirectoryFolderNode extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var \AlibabaCloud\SDK\Config\V20200907\Models\ResourceDirectoryFolderNode[]
     */
    public $children;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var string
     */
    public $parentFolderId;
    protected $_name = [
        'accountId'      => 'AccountId',
        'children'       => 'Children',
        'displayName'    => 'DisplayName',
        'folderId'       => 'FolderId',
        'folderName'     => 'FolderName',
        'parentFolderId' => 'ParentFolderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceDirectoryFolderNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }

        return $model;
    }
}
