<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowNotificationRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;

    /**
     * @var bool
     */
    public $dagNotificationFail;

    /**
     * @var bool
     */
    public $dagNotificationSla;

    /**
     * @var bool
     */
    public $dagNotificationSuccess;

    /**
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
