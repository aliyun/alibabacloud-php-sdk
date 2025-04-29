<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class insureInfoList extends Model
{
    /**
     * @var string
     */
    public $insureNo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'insureNo' => 'insure_no',
        'name' => 'name',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insureNo) {
            $res['insure_no'] = $this->insureNo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['insure_no'])) {
            $model->insureNo = $map['insure_no'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
