<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class DescribePartnerConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $partnerName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contact' => 'Contact',
        'partnerCode' => 'PartnerCode',
        'partnerName' => 'PartnerName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
