<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody\datasetDTO\ownerList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDatasetResponseBody\datasetDTO\versionList;

class datasetDTO extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $dataCellId;

    /**
     * @var string
     */
    public $dataCellName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lockOwner;

    /**
     * @var string
     */
    public $lockOwnerName;

    /**
     * @var string
     */
    public $metadataStorageType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ownerList[]
     */
    public $ownerList;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var versionList[]
     */
    public $versionList;
    protected $_name = [
        'contentType' => 'ContentType',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'dataCellId' => 'DataCellId',
        'dataCellName' => 'DataCellName',
        'description' => 'Description',
        'directory' => 'Directory',
        'fileId' => 'FileId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'lockOwner' => 'LockOwner',
        'lockOwnerName' => 'LockOwnerName',
        'metadataStorageType' => 'MetadataStorageType',
        'name' => 'Name',
        'ownerList' => 'OwnerList',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'scenario' => 'Scenario',
        'storageType' => 'StorageType',
        'tenantId' => 'TenantId',
        'type' => 'Type',
        'versionList' => 'VersionList',
    ];

    public function validate()
    {
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        if (\is_array($this->versionList)) {
            Model::validateArray($this->versionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->dataCellId) {
            $res['DataCellId'] = $this->dataCellId;
        }

        if (null !== $this->dataCellName) {
            $res['DataCellName'] = $this->dataCellName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lockOwner) {
            $res['LockOwner'] = $this->lockOwner;
        }

        if (null !== $this->lockOwnerName) {
            $res['LockOwnerName'] = $this->lockOwnerName;
        }

        if (null !== $this->metadataStorageType) {
            $res['MetadataStorageType'] = $this->metadataStorageType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->versionList) {
            if (\is_array($this->versionList)) {
                $res['VersionList'] = [];
                $n1 = 0;
                foreach ($this->versionList as $item1) {
                    $res['VersionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['DataCellId'])) {
            $model->dataCellId = $map['DataCellId'];
        }

        if (isset($map['DataCellName'])) {
            $model->dataCellName = $map['DataCellName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LockOwner'])) {
            $model->lockOwner = $map['LockOwner'];
        }

        if (isset($map['LockOwnerName'])) {
            $model->lockOwnerName = $map['LockOwnerName'];
        }

        if (isset($map['MetadataStorageType'])) {
            $model->metadataStorageType = $map['MetadataStorageType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1] = ownerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VersionList'])) {
            if (!empty($map['VersionList'])) {
                $model->versionList = [];
                $n1 = 0;
                foreach ($map['VersionList'] as $item1) {
                    $model->versionList[$n1] = versionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
