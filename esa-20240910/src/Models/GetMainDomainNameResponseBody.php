<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetMainDomainNameResponseBody extends Model
{
    /**
     * @var int
     */
    public $domainLevel;

    /**
     * @var string
     */
    public $mainDomainName;

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
        'mainDomainName' => 'MainDomainName',
        'RR' => 'RR',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainLevel) {
            $res['DomainLevel'] = $this->domainLevel;
        }

        if (null !== $this->mainDomainName) {
            $res['MainDomainName'] = $this->mainDomainName;
        }

        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
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
        if (isset($map['DomainLevel'])) {
            $model->domainLevel = $map['DomainLevel'];
        }

        if (isset($map['MainDomainName'])) {
            $model->mainDomainName = $map['MainDomainName'];
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
