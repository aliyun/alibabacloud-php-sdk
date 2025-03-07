<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyV2ResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $bizCode;

    /**
     * @example 2018-09-25/9999-09-09
     *
     * @var string
     */
    public $openTime;

    /**
     * @example LegalPersonNameFlag,LegalPersonCertNoFlag
     *
     * @var string
     */
    public $reasonDetail;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bizCode'      => 'BizCode',
        'openTime'     => 'OpenTime',
        'reasonDetail' => 'ReasonDetail',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->reasonDetail) {
            $res['ReasonDetail'] = $this->reasonDetail;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['ReasonDetail'])) {
            $model->reasonDetail = $map['ReasonDetail'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
