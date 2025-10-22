<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\BatchQueryPushStatusResponseBody\module;

use AlibabaCloud\Dara\Model;

class pushResults extends Model
{
    /**
     * @var string
     */
    public $outBizId;

    /**
     * @var string
     */
    public $pushNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'outBizId' => 'OutBizId',
        'pushNo' => 'PushNo',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }

        if (null !== $this->pushNo) {
            $res['PushNo'] = $this->pushNo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
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
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }

        if (isset($map['PushNo'])) {
            $model->pushNo = $map['PushNo'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
