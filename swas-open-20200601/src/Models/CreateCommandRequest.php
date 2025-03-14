<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCommandRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateCommandRequest extends Model
{
    /**
     * @description The command content. When you specify this parameter, take note of the following items:
     *
     *   When `EnableParameter` is set to true, the custom parameter feature is enabled, and you can configure custom parameters in the command based on the following rules:
     *   Define custom parameters in the {{}} format. Within `{{}}`, the spaces and line feeds before and after the parameter names are ignored.
     *   You can specify up to 20 custom parameters.
     *   The name of a custom parameter can contain only letters, digits, underscores (_), and hyphens (-). The name is case-insensitive.
     *   The name of a custom parameter cannot exceed 64 bytes in length.
     *
     * This parameter is required.
     *
     * @example ifconfig -s
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The description of the command. The description supports all character sets and can be up to 512 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to use custom parameters in the command.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description The name of the command. The name supports all character sets and can be up to 128 characters in length.
     *
     * This parameter is required.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2bti7cf7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags that you want to add to the command. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The timeout period for the command execution on the instance.
     *
     * If a command execution task times out, Command Assistant forcefully terminates the task process. Valid values: 10 to 86400. Unit: seconds. The period of 86400 seconds is equal to 24 hours.
     *
     * Default value: 60.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The language type of the command. Valid values:
     *
     *   RunBatScript: batch command, applicable to Windows instances
     *   RunPowerShellScript: PowerShell command, applicable to Windows instances
     *   RunShellScript: shell command, applicable to Linux instances
     *
     * This parameter is required.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $type;

    /**
     * @description The working directory of the command on the ECS instance.
     *
     * Default values:
     *
     *   For a Linux instance, the default value is the home directory of the root user, which is the `/root` directory.
     *   For a Windows instance, the default value is the directory where the Cloud Assistant client process resides. Example: `C:\\Windows\\System32`.
     *
     * @example /root/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'description' => 'Description',
        'enableParameter' => 'EnableParameter',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
        'timeout' => 'Timeout',
        'type' => 'Type',
        'workingDir' => 'WorkingDir',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
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
