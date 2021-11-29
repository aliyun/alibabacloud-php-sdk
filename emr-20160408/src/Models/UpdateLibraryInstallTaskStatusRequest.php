<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class UpdateLibraryInstallTaskStatusRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskBizId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'status'          => 'Status',
        'taskBizId'       => 'TaskBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskBizId) {
            $res['TaskBizId'] = $this->taskBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLibraryInstallTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskBizId'])) {
            $model->taskBizId = $map['TaskBizId'];
        }

        return $model;
    }
}
