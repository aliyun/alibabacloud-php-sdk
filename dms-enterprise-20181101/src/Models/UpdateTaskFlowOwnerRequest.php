<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowOwnerRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlowInstance](https://help.aliyun.com/document_detail/424689.html) operation to query the task flow ID.
     *
     * This parameter is required.
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The user ID of the new owner. You can call the [GetUser](https://help.aliyun.com/document_detail/147098.html) or [ListUsers](https://help.aliyun.com/document_detail/141938.html) operation to query the user ID.
     *
     * This parameter is required.
     * @example 51****
     *
     * @var string
     */
    public $newOwnerId;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId'      => 'DagId',
        'newOwnerId' => 'NewOwnerId',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->newOwnerId) {
            $res['NewOwnerId'] = $this->newOwnerId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['NewOwnerId'])) {
            $model->newOwnerId = $map['NewOwnerId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
