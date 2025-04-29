<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class QueryReimbursementOrderRequest extends Model
{
    /**
     * @var string
     */
    public $reimbOrderNo;

    /**
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'reimbOrderNo' => 'reimb_order_no',
        'subCorpId' => 'sub_corp_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reimbOrderNo) {
            $res['reimb_order_no'] = $this->reimbOrderNo;
        }

        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
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
        if (isset($map['reimb_order_no'])) {
            $model->reimbOrderNo = $map['reimb_order_no'];
        }

        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
        }

        return $model;
    }
}
