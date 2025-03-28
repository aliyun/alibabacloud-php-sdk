<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowCooperatorsShrinkRequest extends Model
{
    /**
     * @description The IDs of the users who are involved in the task flow to be updated.
     *
     * @var string
     */
    public $cooperatorIdsShrink;

    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](https://help.aliyun.com/document_detail/424565.html) or [ListLhTaskFlowAndScenario](https://help.aliyun.com/document_detail/426672.html) operation to query the task flow ID.
     *
     * This parameter is required.
     *
     * @example 11****
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The ID of the tenant.
     *
     * > :To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'cooperatorIdsShrink' => 'CooperatorIds',
        'dagId' => 'DagId',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cooperatorIdsShrink) {
            $res['CooperatorIds'] = $this->cooperatorIdsShrink;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowCooperatorsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CooperatorIds'])) {
            $model->cooperatorIdsShrink = $map['CooperatorIds'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
