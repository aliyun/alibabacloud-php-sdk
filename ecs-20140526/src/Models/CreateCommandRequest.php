<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCommandRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateCommandRequest extends Model
{
    /**
     * @description The Base64-encoded content of the command.
     *
     *   The parameter value must be Base64-encoded and cannot exceed 18 KB in size.
     *
     *   Custom parameters can be added to the command. To enable the custom parameter feature, you must set `EnableParameter` to true.
     *
     *   Custom parameters are defined in the `{{}}` format. Within `{{}}`, the spaces and line feeds before and after the parameter names are ignored.
     *   The number of custom parameters cannot exceed 20.
     *   A custom parameter name can contain only letters, digits, underscores (\_), and hyphens (-). The name is case-insensitive.
     *   Each custom parameter name cannot exceed 64 bytes in length.
     *
     *   You can specify built-in environment parameters as custom parameters. Then, when you run the command, these parameters are automatically specified by Cloud Assistant. You can specify the following built-in environment parameters:
     *
     *   `{{ACS::RegionId}}`: the region ID.
     *
     *   `{{ACS::AccountId}}`: the instance ID.
     *
     *   `{{ACS::InstanceId}}`: the ID of the instance. When the command is run on multiple instances, if you want to specify `{{ACS::InstanceId}}` as a built-in environment variable, make sure that the version of the Cloud Assistant client is not earlier than the following ones:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     *   `{{ACS::InstanceName}}`: the instance name. If you want to run the command on multiple instances and specify `{{ACS::InstanceName}}` as a built-in environment parameter, make sure that the version of the Cloud Assistant client is not earlier than the following ones:
     *
     *   Linux: 2.2.3.344
     *   Windows: 2.1.3.344
     *
     *   `{{ACS::InvokeId}}`: the task ID. If you want to specify `{{ACS::InvokeId}}` as a built-in environment variable, make sure that the version of the Cloud Assistant client is not earlier than the following one:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     *   `{{ACS::CommandId}}`: the ID of the command. When you call the [RunCommand](~~141751~~) operation, if you want to specify `{{ACS::CommandId}}` as a built-in environment parameter, make sure that the version of the Cloud Assistant client is not earlier than the following ones:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     * @example ZWNobyAxMjM=
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The encoding mode of the command content (CommandContent). Valid values:
     *
     *   PlainText: The command content is not encoded.
     *   Base64: The command content is Base64-encoded.
     *
     * > If the specified value of this parameter is invalid, Base64 is used by default.
     * @example PlainText
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The description of the command. The description supports all character sets and can be up to 512 characters in length.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to use custom parameters in the command.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description The name of the command. The name supports all character sets and can be up to 128 characters in length.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region in which to create the command. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the command.
     *
     * @example rg-123******
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
     * @description The tags to add to the command.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description he maximum timeout period for the command execution on the instance. Unit: seconds. When a command that you created cannot be run, the command times out. When a command execution times out, Cloud Assistant Agent forcefully terminates the command process by canceling the PID.
     *
     * Default value: 60.
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The command type. Valid values:
     *
     *   RunBatScript: batch commands. These commands are applicable to Windows instances.
     *   RunPowerShellScript: PowerShell commands. These commands are applicable to Windows instances.
     *   RunShellScript: shell commands. These commands are applicable to Linux instances.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $type;

    /**
     * @description The working directory of the command on the instance.
     *
     * Default value:
     *
     *   For Linux instances, the default value is the home directory of the root user, which is the `/root` directory.
     *   For Windows instances, the default value is the directory where the Cloud Assistant client process resides. Example: `C:\Windows\System32\`.
     *
     * @example /root/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent'       => 'CommandContent',
        'contentEncoding'      => 'ContentEncoding',
        'description'          => 'Description',
        'enableParameter'      => 'EnableParameter',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tag'                  => 'Tag',
        'timeout'              => 'Timeout',
        'type'                 => 'Type',
        'workingDir'           => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
