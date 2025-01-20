<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowNotificationResponseBody;

use AlibabaCloud\Dara\Model;

class notification extends Model
{
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
    protected $_name = [
        'dagNotificationFail'    => 'DagNotificationFail',
        'dagNotificationSla'     => 'DagNotificationSla',
        'dagNotificationSuccess' => 'DagNotificationSuccess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
