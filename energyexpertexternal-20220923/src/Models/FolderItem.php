<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class FolderItem extends Model
{
    /**
     * @var int
     */
    public $currentLevel;

    /**
     * @var int
     */
    public $docCount;

    /**
     * @var int
     */
    public $folderDefault;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var int
     */
    public $folderNum;

    /**
     * @var string
     */
    public $ossDomain;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $ossUpdateBy;

    /**
     * @var string
     */
    public $parentFolderId;

    /**
     * @var string
     */
    public $resourcePath;

    /**
     * @var int
     */
    public $storageType;

    /**
     * @var FolderItem[]
     */
    public $subFolderList;

    /**
     * @var int
     */
    public $syncParsingStatus;

    /**
     * @var int
     */
    public $syncStatus;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'currentLevel' => 'currentLevel',
        'docCount' => 'docCount',
        'folderDefault' => 'folderDefault',
        'folderId' => 'folderId',
        'folderName' => 'folderName',
        'folderNum' => 'folderNum',
        'ossDomain' => 'ossDomain',
        'ossPath' => 'ossPath',
        'ossUpdateBy' => 'ossUpdateBy',
        'parentFolderId' => 'parentFolderId',
        'resourcePath' => 'resourcePath',
        'storageType' => 'storageType',
        'subFolderList' => 'subFolderList',
        'syncParsingStatus' => 'syncParsingStatus',
        'syncStatus' => 'syncStatus',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (\is_array($this->subFolderList)) {
            Model::validateArray($this->subFolderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentLevel) {
            $res['currentLevel'] = $this->currentLevel;
        }

        if (null !== $this->docCount) {
            $res['docCount'] = $this->docCount;
        }

        if (null !== $this->folderDefault) {
            $res['folderDefault'] = $this->folderDefault;
        }

        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->folderName) {
            $res['folderName'] = $this->folderName;
        }

        if (null !== $this->folderNum) {
            $res['folderNum'] = $this->folderNum;
        }

        if (null !== $this->ossDomain) {
            $res['ossDomain'] = $this->ossDomain;
        }

        if (null !== $this->ossPath) {
            $res['ossPath'] = $this->ossPath;
        }

        if (null !== $this->ossUpdateBy) {
            $res['ossUpdateBy'] = $this->ossUpdateBy;
        }

        if (null !== $this->parentFolderId) {
            $res['parentFolderId'] = $this->parentFolderId;
        }

        if (null !== $this->resourcePath) {
            $res['resourcePath'] = $this->resourcePath;
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }

        if (null !== $this->subFolderList) {
            if (\is_array($this->subFolderList)) {
                $res['subFolderList'] = [];
                $n1 = 0;
                foreach ($this->subFolderList as $item1) {
                    $res['subFolderList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->syncParsingStatus) {
            $res['syncParsingStatus'] = $this->syncParsingStatus;
        }

        if (null !== $this->syncStatus) {
            $res['syncStatus'] = $this->syncStatus;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['currentLevel'])) {
            $model->currentLevel = $map['currentLevel'];
        }

        if (isset($map['docCount'])) {
            $model->docCount = $map['docCount'];
        }

        if (isset($map['folderDefault'])) {
            $model->folderDefault = $map['folderDefault'];
        }

        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['folderName'])) {
            $model->folderName = $map['folderName'];
        }

        if (isset($map['folderNum'])) {
            $model->folderNum = $map['folderNum'];
        }

        if (isset($map['ossDomain'])) {
            $model->ossDomain = $map['ossDomain'];
        }

        if (isset($map['ossPath'])) {
            $model->ossPath = $map['ossPath'];
        }

        if (isset($map['ossUpdateBy'])) {
            $model->ossUpdateBy = $map['ossUpdateBy'];
        }

        if (isset($map['parentFolderId'])) {
            $model->parentFolderId = $map['parentFolderId'];
        }

        if (isset($map['resourcePath'])) {
            $model->resourcePath = $map['resourcePath'];
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        if (isset($map['subFolderList'])) {
            if (!empty($map['subFolderList'])) {
                $model->subFolderList = [];
                $n1 = 0;
                foreach ($map['subFolderList'] as $item1) {
                    $model->subFolderList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['syncParsingStatus'])) {
            $model->syncParsingStatus = $map['syncParsingStatus'];
        }

        if (isset($map['syncStatus'])) {
            $model->syncStatus = $map['syncStatus'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
