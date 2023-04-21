<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @description The type of the command. Valid values:
     *
     *   RunBatScript
     *   RunPowerShellScript
     *
     * @example RunPowerShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The encoding method of the command content and outputs. Valid values:
     *
     *   PlainText
     *   Base64
     *
     * Default value: Base64.
     * @example PlainText
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The ID of the cloud desktop. If you specify a cloud desktop, all execution records of Cloud Assistant commands on the cloud desktop are queried.
     *
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The IDs of the cloud desktops. The DesktopId parameter will be discontinued. We recommend that you use the DesktopIds parameter to specify the IDs of cloud desktops.
     *
     * @var string[]
     */
    public $desktopIds;

    /**
     * @description The ID of the end user.
     *
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description Specifies whether to return command outputs in the response. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $includeOutput;

    /**
     * @description The ID of the execution.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The overall execution status of the command. The overall execution status is determined by the execution status of the command on one or more cloud desktops. Valid values:
     *
     *   Running: The execution is in progress on one or more cloud desktops.
     *   Finished: The execution is complete on all cloud desktops, or the execution is manually stopped on specific cloud desktops and the execution is complete on other cloud desktops.
     *   Failed: The execution failed on all cloud desktops.
     *   PartialFailed: The execution failed on specific cloud desktops.
     *   Stopped: The execution is stopped.
     *
     * Default value: Running.
     * @example Finished
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description The number of entries to return on each page.
     *
     *   Maximum value: 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. Set the value to the NextToken value that is returned from the last call.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commandType'     => 'CommandType',
        'contentEncoding' => 'ContentEncoding',
        'desktopId'       => 'DesktopId',
        'desktopIds'      => 'DesktopIds',
        'endUserId'       => 'EndUserId',
        'includeOutput'   => 'IncludeOutput',
        'invokeId'        => 'InvokeId',
        'invokeStatus'    => 'InvokeStatus',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

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
