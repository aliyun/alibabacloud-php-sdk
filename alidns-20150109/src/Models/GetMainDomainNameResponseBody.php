<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class GetMainDomainNameResponseBody extends Model
{
    /**
     * @var int
     */
    public $domainLevel;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $RR;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainLevel' => 'DomainLevel',
        'domainName'  => 'DomainName',
        'RR'          => 'RR',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainLevel) {
            $res['DomainLevel'] = $this->domainLevel;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMainDomainNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainLevel'])) {
            $model->domainLevel = $map['DomainLevel'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
