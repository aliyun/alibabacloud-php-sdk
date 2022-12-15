<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class insureInfoList extends Model
{
    /**
     * @example KJ-879657
     *
     * @var string
     */
    public $insureNo;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'insureNo' => 'insure_no',
        'name'     => 'name',
        'status'   => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return insureInfoList
     */
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
