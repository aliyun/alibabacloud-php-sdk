<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class CreateSitePairResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example si-0001jntih0phb0i2w1ya
     *
     * @var string
     */
    public $primarySiteId;

    /**
     * @example D14F1EB0-30B7-5A38-92E7-C2D11077D5CA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example si-000imvpcegvbh6i5kd2u
     *
     * @var string
     */
    public $secondarySiteId;

    /**
     * @example s-000bvn4shsuhq4cph5i8
     *
     * @var string
     */
    public $sitePairId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'            => 'Code',
        'message'         => 'Message',
        'primarySiteId'   => 'PrimarySiteId',
        'requestId'       => 'RequestId',
        'secondarySiteId' => 'SecondarySiteId',
        'sitePairId'      => 'SitePairId',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->primarySiteId) {
            $res['PrimarySiteId'] = $this->primarySiteId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secondarySiteId) {
            $res['SecondarySiteId'] = $this->secondarySiteId;
        }
        if (null !== $this->sitePairId) {
            $res['SitePairId'] = $this->sitePairId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSitePairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PrimarySiteId'])) {
            $model->primarySiteId = $map['PrimarySiteId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecondarySiteId'])) {
            $model->secondarySiteId = $map['SecondarySiteId'];
        }
        if (isset($map['SitePairId'])) {
            $model->sitePairId = $map['SitePairId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
