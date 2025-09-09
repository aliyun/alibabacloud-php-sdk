<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class GetTxtRecordForVerifyResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $parentDomainName;

    /**
     * @var string
     */
    public $RR;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'domainName' => 'DomainName',
        'parentDomainName' => 'ParentDomainName',
        'RR' => 'RR',
        'requestId' => 'RequestId',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->parentDomainName) {
            $res['ParentDomainName'] = $this->parentDomainName;
        }

        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ParentDomainName'])) {
            $model->parentDomainName = $map['ParentDomainName'];
        }

        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
