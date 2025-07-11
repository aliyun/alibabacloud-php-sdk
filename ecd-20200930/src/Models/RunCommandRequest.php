<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RunCommandRequest extends Model
{
    /**
     * @description The content of the command. The command content can be plaintext or Base64-encoded.\\
     * The Base64-encoded command content cannot exceed 16 KB in size.
     *
     * > If the command content is Base64-encoded, you must set the ContentEncoding parameter to Base64.
     *
     * This parameter is required.
     *
     * @example ipconfig
     *
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandRole;

    /**
     * @description The encoding mode of the command content. Valid values:
     *
     *   PlainText: The command content is not encoded.
     *   Base64: The command content is Base64-encoded.
     *
     * Default value: PlainText. If the specified value of this parameter is invalid, PlainText is used by default.
     *
     * @example Base64
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The ID of cloud desktop N. Valid values of N: 1 to 50.\\
     * If multiple cloud desktops are specified and the command execution succeeds on at least one of the cloud desktops, the operation is considered successful. If multiple cloud desktops are specified and the command execution fails on all the cloud desktops, verify the value of the parameter and try again.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The ID of the end user. If you specify a value, you run the command as the end user that is granted specific permissions. Note: The end user has sessions on a cloud computer. That is, when the cloud computer is started, the end user logs on to an Alibaba Cloud Workspace client and connects to the cloud computer, and the cloud computer is not preempted by another end user during the connection. This parameter is not available for Linux cloud computers.
     *
     * @example User1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timeout period for the command to run. Unit: seconds. Default value: 60.\\
     * A timeout error occurs if the command cannot be run because the process slows down or because a specific module or the Cloud Assistant client does not exist. When a timeout error occurs, the command process is forcibly terminated.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The language of the O\\&M command. Valid values:
     *
     *   RunBatScript
     *   RunPowerShellScript
     *
     * This parameter is required.
     *
     * @example RunPowerShellScript
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandRole' => 'CommandRole',
        'contentEncoding' => 'ContentEncoding',
        'desktopId' => 'DesktopId',
        'endUserId' => 'EndUserId',
        'regionId' => 'RegionId',
        'timeout' => 'Timeout',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandRole) {
            $res['CommandRole'] = $this->commandRole;
        }
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandRole'])) {
            $model->commandRole = $map['CommandRole'];
        }
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
