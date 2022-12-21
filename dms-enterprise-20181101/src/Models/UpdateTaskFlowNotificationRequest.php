<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowNotificationRequest extends Model
{
    /**
     * @description The unique ID of the task flow. You can call the [ListTaskFlow](~~424565~~) or [ListLhTaskFlowAndScenario](~~426672~~) operation to query the task flow ID.
     *
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description Specifies whether to enable notifications for failed task flows. Notifications are disabled by default. You can enable notifications based on your business requirements.
     *
     * @example true
     *
     * @var bool
     */
    public $dagNotificationFail;

    /**
     * @description Specifies whether to enable SLA global notifications for task flows. Notifications are disabled by default. You can enable notifications based on your business requirements.
     *
     * @example true
     *
     * @var bool
     */
    public $dagNotificationSla;

    /**
     * @description Specifies whether to enable notifications for successful task flows. Notifications are disabled by default. You can enable notifications based on your business requirements.
     *
     * @example true
     *
     * @var bool
     */
    public $dagNotificationSuccess;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](~~181330~~).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId'                  => 'DagId',
        'dagNotificationFail'    => 'DagNotificationFail',
        'dagNotificationSla'     => 'DagNotificationSla',
        'dagNotificationSuccess' => 'DagNotificationSuccess',
        'tid'                    => 'Tid',
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
        if (null !== $this->dagNotificationFail) {
            $res['DagNotificationFail'] = $this->dagNotificationFail;
        }
        if (null !== $this->dagNotificationSla) {
            $res['DagNotificationSla'] = $this->dagNotificationSla;
        }
        if (null !== $this->dagNotificationSuccess) {
            $res['DagNotificationSuccess'] = $this->dagNotificationSuccess;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowNotificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['DagNotificationFail'])) {
            $model->dagNotificationFail = $map['DagNotificationFail'];
        }
        if (isset($map['DagNotificationSla'])) {
            $model->dagNotificationSla = $map['DagNotificationSla'];
        }
        if (isset($map['DagNotificationSuccess'])) {
            $model->dagNotificationSuccess = $map['DagNotificationSuccess'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
