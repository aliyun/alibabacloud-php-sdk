<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class GetTxtRecordForVerifyResponseBody extends Model
{
    /**
     * @description The domain name.
     *
     * >  If you do not specify this parameter, it is not returned.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $parentDomainName;

    /**
     * @description The hostname.
     *
     * @example aliyunRetrieval
     *
     * @var string
     */
    public $RR;

    /**
     * @description The request ID.
     *
     * @example 9CC0D642-49D4-48DE-A1A5-9F218652E4A7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The record value.
     *
     * >  The validity period is three days.
     * @example c99419e6997f41daaa3e*****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'domainName'       => 'DomainName',
        'parentDomainName' => 'ParentDomainName',
        'RR'               => 'RR',
        'requestId'        => 'RequestId',
        'value'            => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetTxtRecordForVerifyResponseBody
     */
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
