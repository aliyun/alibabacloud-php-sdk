<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class BatchQueryCreateAccountTraceRequest extends Model
{
    /**
     * @var string
     */
    public $mpk;

    /**
     * @var string
     */
    public $traceNoList;
    protected $_name = [
        'mpk' => 'Mpk',
        'traceNoList' => 'TraceNoList',
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

        if (null !== $this->traceNoList) {
            $res['TraceNoList'] = $this->traceNoList;
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

        if (isset($map['TraceNoList'])) {
            $model->traceNoList = $map['TraceNoList'];
        }

        return $model;
    }
}
