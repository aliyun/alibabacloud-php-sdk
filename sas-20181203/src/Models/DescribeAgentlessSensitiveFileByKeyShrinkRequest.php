<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAgentlessSensitiveFileByKeyShrinkRequest extends Model
{
    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The UUID of the asset that is scanned. You can query the UUID on the Host or Cloud Product page. If you scan a host, set this parameter to the UUID of the scanned host. If you scan a snapshot or a custom image, set this parameter to the ID of the scanned snapshot or image.
     *
     * @example 06293273b67d19516cfcc712194f****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @description The instance ID of the asset that is scanned. To query the instance ID, go to the Task Management page, click Details of a task, and then view the value of Check On.
     *
     * @example i-bp1fu4aqltf1huhc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name or IP address of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The types of the assets that are scanned.
     *
     * @var string
     */
    public $scanRangeShrink;

    /**
     * @description The type of the sensitive file.
     *
     * @example sshpasswd
     *
     * @var string
     */
    public $sensitiveFileKey;

    /**
     * @description The status of the baseline risk. Valid values:
     *
     *   **0**: unfixed.
     *   **1**: fixed.
     *
     * @example 0
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'imageUuid'        => 'ImageUuid',
        'instanceId'       => 'InstanceId',
        'pageSize'         => 'PageSize',
        'remark'           => 'Remark',
        'scanRangeShrink'  => 'ScanRange',
        'sensitiveFileKey' => 'SensitiveFileKey',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scanRangeShrink) {
            $res['ScanRange'] = $this->scanRangeShrink;
        }
        if (null !== $this->sensitiveFileKey) {
            $res['SensitiveFileKey'] = $this->sensitiveFileKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAgentlessSensitiveFileByKeyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScanRange'])) {
            $model->scanRangeShrink = $map['ScanRange'];
        }
        if (isset($map['SensitiveFileKey'])) {
            $model->sensitiveFileKey = $map['SensitiveFileKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
