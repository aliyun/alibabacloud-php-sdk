<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class RdAccountFolderDTO extends Model
{
    /**
     * @var int
     */
    public $accountCount;

    /**
     * @var RdAccountDTO[]
     */
    public $accountList;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var RdAccountFolderDTO[]
     */
    public $folderList;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @var string
     */
    public $resourceDirectoryPath;

    /**
     * @var string
     */
    public $resourceDirectoryPathName;

    /**
     * @var int
     */
    public $selectedCount;
    protected $_name = [
        'accountCount' => 'AccountCount',
        'accountList' => 'AccountList',
        'folderId' => 'FolderId',
        'folderList' => 'FolderList',
        'folderName' => 'FolderName',
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'resourceDirectoryPath' => 'ResourceDirectoryPath',
        'resourceDirectoryPathName' => 'ResourceDirectoryPathName',
        'selectedCount' => 'SelectedCount',
    ];

    public function validate()
    {
        if (\is_array($this->accountList)) {
            Model::validateArray($this->accountList);
        }
        if (\is_array($this->folderList)) {
            Model::validateArray($this->folderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountCount) {
            $res['AccountCount'] = $this->accountCount;
        }

        if (null !== $this->accountList) {
            if (\is_array($this->accountList)) {
                $res['AccountList'] = [];
                $n1 = 0;
                foreach ($this->accountList as $item1) {
                    $res['AccountList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->folderList) {
            if (\is_array($this->folderList)) {
                $res['FolderList'] = [];
                $n1 = 0;
                foreach ($this->folderList as $item1) {
                    $res['FolderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }

        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }

        if (null !== $this->resourceDirectoryPath) {
            $res['ResourceDirectoryPath'] = $this->resourceDirectoryPath;
        }

        if (null !== $this->resourceDirectoryPathName) {
            $res['ResourceDirectoryPathName'] = $this->resourceDirectoryPathName;
        }

        if (null !== $this->selectedCount) {
            $res['SelectedCount'] = $this->selectedCount;
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
        if (isset($map['AccountCount'])) {
            $model->accountCount = $map['AccountCount'];
        }

        if (isset($map['AccountList'])) {
            if (!empty($map['AccountList'])) {
                $model->accountList = [];
                $n1 = 0;
                foreach ($map['AccountList'] as $item1) {
                    $model->accountList[$n1++] = RdAccountDTO::fromMap($item1);
                }
            }
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['FolderList'])) {
            if (!empty($map['FolderList'])) {
                $model->folderList = [];
                $n1 = 0;
                foreach ($map['FolderList'] as $item1) {
                    $model->folderList[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }

        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }

        if (isset($map['ResourceDirectoryPath'])) {
            $model->resourceDirectoryPath = $map['ResourceDirectoryPath'];
        }

        if (isset($map['ResourceDirectoryPathName'])) {
            $model->resourceDirectoryPathName = $map['ResourceDirectoryPathName'];
        }

        if (isset($map['SelectedCount'])) {
            $model->selectedCount = $map['SelectedCount'];
        }

        return $model;
    }
}
