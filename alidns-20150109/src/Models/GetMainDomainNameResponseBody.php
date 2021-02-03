<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class GetMainDomainNameResponseBody extends Model
{
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
    public $domainName;

    /**
     * @var int
     */
    public $domainLevel;
    protected $_name = [
        'RR'          => 'RR',
        'requestId'   => 'RequestId',
        'domainName'  => 'DomainName',
        'domainLevel' => 'DomainLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainLevel) {
            $res['DomainLevel'] = $this->domainLevel;
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
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainLevel'])) {
            $model->domainLevel = $map['DomainLevel'];
        }

        return $model;
    }
}
