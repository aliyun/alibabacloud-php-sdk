<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\SendFileRequest\tag;

class SendFileRequest extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $contentType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $fileGroup;
    /**
     * @var string
     */
    public $fileMode;
    /**
     * @var string
     */
    public $fileOwner;
    /**
     * @var string[]
     */
    public $instanceId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $overwrite;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $targetDir;
    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'content'              => 'Content',
        'contentType'          => 'ContentType',
        'description'          => 'Description',
        'fileGroup'            => 'FileGroup',
        'fileMode'             => 'FileMode',
        'fileOwner'            => 'FileOwner',
        'instanceId'           => 'InstanceId',
        'name'                 => 'Name',
        'overwrite'            => 'Overwrite',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tag'                  => 'Tag',
        'targetDir'            => 'TargetDir',
        'timeout'              => 'Timeout',
    ];

    public function validate()
    {
        if (\is_array($this->instanceId)) {
            Model::validateArray($this->instanceId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileGroup) {
            $res['FileGroup'] = $this->fileGroup;
        }

        if (null !== $this->fileMode) {
            $res['FileMode'] = $this->fileMode;
        }

        if (null !== $this->fileOwner) {
            $res['FileOwner'] = $this->fileOwner;
        }

        if (null !== $this->instanceId) {
            if (\is_array($this->instanceId)) {
                $res['InstanceId'] = [];
                $n1                = 0;
                foreach ($this->instanceId as $item1) {
                    $res['InstanceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileGroup'])) {
            $model->fileGroup = $map['FileGroup'];
        }

        if (isset($map['FileMode'])) {
            $model->fileMode = $map['FileMode'];
        }

        if (isset($map['FileOwner'])) {
            $model->fileOwner = $map['FileOwner'];
        }

        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $n1                = 0;
                foreach ($map['InstanceId'] as $item1) {
                    $model->instanceId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
