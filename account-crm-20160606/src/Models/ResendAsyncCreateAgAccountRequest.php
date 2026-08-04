<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class ResendAsyncCreateAgAccountRequest extends Model
{
    /**
     * @var string
     */
    public $mpk;

    /**
     * @var string
     */
    public $traceNo;
    protected $_name = [
        'mpk' => 'Mpk',
        'traceNo' => 'TraceNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
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
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['TraceNo'])) {
            $model->traceNo = $map['TraceNo'];
        }

        return $model;
    }
}
