<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class InvokeCommandShrinkRequest extends Model
{
    /**
     * @description The command ID. You can call the DescribeCommands operation to query all available command IDs.
     *
     * This parameter is required.
     * @example c-sh02yh0932w****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The IDs of the simple application servers. The value can be a JSON array that consists of up to 50 IDs of simple application servers. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     * @example ["2ad1ae67295445f598017499dc****", "2ad1ae67295445f598017123dc****"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The key-value pairs of custom parameters to specify when the custom parameter feature is enabled.
     *
     *   You can specify up to 10 custom parameters. Each key in a Map collection cannot be an empty string and can be up to 64 characters in length.
     *   Values in a Map collection can be empty strings. The total length of the custom parameters and the original command cannot exceed 18 KB after they are encoded in Base64.
     *   The custom parameter names that you specify for the Parameters parameter must be included in the custom parameter names that you specified when you created the command.
     *   You can use empty strings to represent the custom parameters that are not specified. If you want to disable the custom parameter feature, you can leave this parameter empty.
     *
     * @example {"delayed_insert_timeout":"600","max_length_for_sort_data":"2048"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the user who runs the command in a simple application server. The username cannot exceed 255 characters in length.
     *
     *   For Linux servers, the default value is the root username.
     *   For Windows servers, the default value is the system username.
     *
     * You can change the user to run the command only for Linux simple application servers.
     * @example test
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'commandId'        => 'CommandId',
        'instanceIds'      => 'InstanceIds',
        'parametersShrink' => 'Parameters',
        'regionId'         => 'RegionId',
        'username'         => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeCommandShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
