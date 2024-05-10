<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchRequest;

use AlibabaCloud\Tea\Model;

class searchPassengerList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 10012301201
     *
     * @var string
     */
    public $certNo;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $certType;

    /**
     * @description This parameter is required.
     *
     * @example ZHANGSAN
     *
     * @var string
     */
    public $fullName;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'certNo'   => 'cert_no',
        'certType' => 'cert_type',
        'fullName' => 'full_name',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }
        if (null !== $this->fullName) {
            $res['full_name'] = $this->fullName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchPassengerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }
        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }
        if (isset($map['full_name'])) {
            $model->fullName = $map['full_name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
