<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class DescribePartnerConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $contact;

    /**
     * @example jinsan
     *
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $partnerName;

    /**
     * @example 8179A0B3-A5D3-52F4-8845-F0ABC3CC6783
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contact'     => 'Contact',
        'partnerCode' => 'PartnerCode',
        'partnerName' => 'PartnerName',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->partnerName) {
            $res['PartnerName'] = $this->partnerName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePartnerConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contact'])) {
            $model->contact = $map['Contact'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['PartnerName'])) {
            $model->partnerName = $map['PartnerName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
