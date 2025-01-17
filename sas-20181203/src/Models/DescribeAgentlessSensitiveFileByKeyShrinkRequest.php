<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeAgentlessSensitiveFileByKeyShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $imageUuid;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $scanRangeShrink;
    /**
     * @var string
     */
    public $sensitiveFileKey;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
