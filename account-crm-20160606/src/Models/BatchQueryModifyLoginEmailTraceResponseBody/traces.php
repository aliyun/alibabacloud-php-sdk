<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\BatchQueryModifyLoginEmailTraceResponseBody;

use AlibabaCloud\Dara\Model;

class traces extends Model
{
    /**
     * @var string
     */
    public $newLoginEmail;

    /**
     * @var string
     */
    public $nowLoginEmail;

    /**
     * @var string
     */
    public $oldLoginEmail;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $traceNo;
    protected $_name = [
        'newLoginEmail' => 'NewLoginEmail',
        'nowLoginEmail' => 'NowLoginEmail',
        'oldLoginEmail' => 'OldLoginEmail',
        'pk' => 'Pk',
        'status' => 'Status',
        'traceNo' => 'TraceNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newLoginEmail) {
            $res['NewLoginEmail'] = $this->newLoginEmail;
        }

        if (null !== $this->nowLoginEmail) {
            $res['NowLoginEmail'] = $this->nowLoginEmail;
        }

        if (null !== $this->oldLoginEmail) {
            $res['OldLoginEmail'] = $this->oldLoginEmail;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->traceNo) {
            $res['TraceNo'] = $this->traceNo;
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
        if (isset($map['NewLoginEmail'])) {
            $model->newLoginEmail = $map['NewLoginEmail'];
        }

        if (isset($map['NowLoginEmail'])) {
            $model->nowLoginEmail = $map['NowLoginEmail'];
        }

        if (isset($map['OldLoginEmail'])) {
            $model->oldLoginEmail = $map['OldLoginEmail'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TraceNo'])) {
            $model->traceNo = $map['TraceNo'];
        }

        return $model;
    }
}
