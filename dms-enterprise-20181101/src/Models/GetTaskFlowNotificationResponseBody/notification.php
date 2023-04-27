<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowNotificationResponseBody;

use AlibabaCloud\Tea\Model;

class notification extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $dagNotificationFail;

    /**
     * @example true
     *
     * @var bool
     */
    public $dagNotificationSla;

    /**
     * @example true
     *
     * @var bool
     */
    public $dagNotificationSuccess;
    protected $_name = [
        'dagNotificationFail'    => 'DagNotificationFail',
        'dagNotificationSla'     => 'DagNotificationSla',
        'dagNotificationSuccess' => 'DagNotificationSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagNotificationFail) {
            $res['DagNotificationFail'] = $this->dagNotificationFail;
        }
        if (null !== $this->dagNotificationSla) {
            $res['DagNotificationSla'] = $this->dagNotificationSla;
        }
        if (null !== $this->dagNotificationSuccess) {
            $res['DagNotificationSuccess'] = $this->dagNotificationSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagNotificationFail'])) {
            $model->dagNotificationFail = $map['DagNotificationFail'];
        }
        if (isset($map['DagNotificationSla'])) {
            $model->dagNotificationSla = $map['DagNotificationSla'];
        }
        if (isset($map['DagNotificationSuccess'])) {
            $model->dagNotificationSuccess = $map['DagNotificationSuccess'];
        }

        return $model;
    }
}
