<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\SendFileRequest\tag;
use AlibabaCloud\Tea\Model;

class SendFileRequest extends Model
{
    /**
     * @description The content of the remote file. The content must not exceed 32 KB in size after it is encoded in Base64.
     *
     *   If `ContentType` is set to `PlainText`, the Content value is in plaintext.
     *   If `ContentType` is set to `Base64`, the Content value is Base64-encoded.
     *
     * This parameter is required.
     * @example #!/bin/bash  echo "Current User is :"  echo $(ps | grep "$$" | awk \\"{print $2}\\")  --------  oss://bucketName/objectName
     *
     * @var string
     */
    public $content;

    /**
     * @description The content type of the file. Valid values:
     *
     *   PlainText: The file content is not encoded.
     *   Base64: The file content is Base64-encoded.
     *
     * Default value: PlainText.
     * @example PlainText
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The description of the file. The description supports all character sets and can be up to 512 characters in length.
     *
     * @example This is a test file.
     *
     * @var string
     */
    public $description;

    /**
     * @description The user group of the file. This parameter takes effect only for Linux instances. Default value: root. The user group name can be up to 64 characters in length.
     *
     * >  If you want to use a non-root user group, make sure that the user group exists in the instances.
     * @example test
     *
     * @var string
     */
    public $fileGroup;

    /**
     * @description The permissions on the file. This parameter takes effect only for Linux instances. You can configure this parameter in the same way as you configure the chmod command.
     *
     * Default value: 0644, which indicates that the owner of the file has the read and write permissions on the file and that the user group of the file and other users have the read-only permissions on the file.
     * @example 0644
     *
     * @var string
     */
    public $fileMode;

    /**
     * @description The owner of the file. This parameter takes effect only for Linux instances. Default value: root. The value can be up to 64 characters in length.
     *
     * >  If you want to use a non-root user, make sure that the user exists in the instances.
     * @example test
     *
     * @var string
     */
    public $fileOwner;

    /**
     * @description The ID of instance N to which to send the file. Up to 50 instance IDs can be specified in each request. Valid values of N: 1 to 50.
     *
     * This parameter is required.
     * @example i-bp185dy2o3o6n****
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @description The name of the file. The name supports all character sets and can be up to 255 characters in length.
     *
     * This parameter is required.
     * @example file.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to overwrite a file in the destination directory if the file has the same name as the sent file.
     *
     *   true: overwrites the file.
     *   false: does not overwrite the file.
     *
     * Default value: false.
     * @example true
     *
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
     * @description The region ID of the instance to which to send the file. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. When you specify this parameter, take note of the following items:
     *
     *   The ECS instance specified by the InstanceId parameter must belong to this resource group.
     *   If you specify this parameter, you can call the [DescribeSendFileResults](https://help.aliyun.com/document_detail/184117.html) operation to query file sending results in the specified resource group.
     *
     * @example rg-bp67acfmxazb4p****
     *
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
     * @description The list of tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The destination directory on the instance to which to send the file. If the specified directory does not exist, the system creates the directory on the instance. The value supports all character sets and cannot exceed 255 characters in length.
     *
     * This parameter is required.
     * @example /home
     *
     * @var string
     */
    public $targetDir;

    /**
     * @description The timeout period for the file sending task. Unit: seconds.
     *
     *   A timeout error occurs when a file cannot be sent because the process slows down or because a specific module or Cloud Assistant Agent does not exist.
     *   If the specified timeout period is less than 10 seconds, the system sets the timeout period to 10 seconds to ensure that the file can be sent to the instances.
     *
     * Default value: 60.
     * @example 60
     *
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
    }

    public function toMap()
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
            $res['InstanceId'] = $this->instanceId;
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return SendFileRequest
     */
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
                $model->instanceId = $map['InstanceId'];
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
