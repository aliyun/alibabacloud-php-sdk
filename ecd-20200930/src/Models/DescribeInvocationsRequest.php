<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @description The command type.
     *
     * Valid values:
     *
     *   RunPowerShellScript: the PowerShell command.
     *   RunBatScript: the Bat command.
     *
     * @example RunPowerShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The encoding method of the command content and outputs.
     *
     * Valid values:
     *
     *   Base64 (default): returns the Base64-encoded command content and command outputs.
     *   PlainText: returns the original command content and outputs in plain text.
     *
     * @example PlainText
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The cloud computer ID. If you specify a cloud computer, all command execution records of the cloud computer are queried.
     *
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The cloud computer IDs.
     *
     * >  The `DesktopId` parameter will be deprecated. We recommend using the DesktopIds parameter to specify cloud computer IDs instead.
     *
     * @var string[]
     */
    public $desktopIds;

    /**
     * @description The user ID.
     *
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description Specifies whether to return the execution results of the remote command on all cloud computers when executed across multiple cloud computers.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $includeInvokeDesktops;

    /**
     * @description Specifies whether to return command outputs in the response.
     *
     * Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $includeOutput;

    /**
     * @description The execution ID of the command. You can obtain the value by calling the [RunCommand](~~RunCommand~~) operation.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The execution status of the command. The value of this parameter is determined by the execution states of the command on all participating cloud computers.
     *
     * Valid values:
     *
     *   Finished: The command execution completes on all cloud computers. Alternatively, the command execution is manually stopped on some cloud computers while it completes on the others.
     *   Stopped: The command execution stops.
     *   Failed: The command execution failed on all cloud computers.
     *   Running: Once there is a command execution in progress, the execution status defaults to Running.
     *   PartialFailed: If the command execution failed on part of the cloud computers, the execution status is considered partially failed.
     *
     * @example Finished
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description The number of entries per page.
     *
     *   Valid values: 1 to 50.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The query token. Set the value to the NextToken value that is returned from the last call to the previous DescribeInvocations operation.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commandType' => 'CommandType',
        'contentEncoding' => 'ContentEncoding',
        'desktopId' => 'DesktopId',
        'desktopIds' => 'DesktopIds',
        'endUserId' => 'EndUserId',
        'includeInvokeDesktops' => 'IncludeInvokeDesktops',
        'includeOutput' => 'IncludeOutput',
        'invokeId' => 'InvokeId',
        'invokeStatus' => 'InvokeStatus',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopIds) {
            $res['DesktopIds'] = $this->desktopIds;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->includeInvokeDesktops) {
            $res['IncludeInvokeDesktops'] = $this->includeInvokeDesktops;
        }
        if (null !== $this->includeOutput) {
            $res['IncludeOutput'] = $this->includeOutput;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = $map['DesktopIds'];
            }
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['IncludeInvokeDesktops'])) {
            $model->includeInvokeDesktops = $map['IncludeInvokeDesktops'];
        }
        if (isset($map['IncludeOutput'])) {
            $model->includeOutput = $map['IncludeOutput'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
