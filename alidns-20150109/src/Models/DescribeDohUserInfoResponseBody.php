<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDohUserInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $domainCount;

    /**
     * @var int
     */
    public $pdnsId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $subDomainCount;
    protected $_name = [
        'domainCount'    => 'DomainCount',
        'pdnsId'         => 'PdnsId',
        'requestId'      => 'RequestId',
        'subDomainCount' => 'SubDomainCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->pdnsId) {
            $res['PdnsId'] = $this->pdnsId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subDomainCount) {
            $res['SubDomainCount'] = $this->subDomainCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDohUserInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['PdnsId'])) {
            $model->pdnsId = $map['PdnsId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomainCount'])) {
            $model->subDomainCount = $map['SubDomainCount'];
        }

        return $model;
    }
}
