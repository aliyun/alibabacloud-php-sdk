<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDohUserInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $subDomainCount;

    /**
     * @var int
     */
    public $pdnsId;

    /**
     * @var int
     */
    public $domainCount;
    protected $_name = [
        'requestId'      => 'RequestId',
        'subDomainCount' => 'SubDomainCount',
        'pdnsId'         => 'PdnsId',
        'domainCount'    => 'DomainCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subDomainCount) {
            $res['SubDomainCount'] = $this->subDomainCount;
        }
        if (null !== $this->pdnsId) {
            $res['PdnsId'] = $this->pdnsId;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomainCount'])) {
            $model->subDomainCount = $map['SubDomainCount'];
        }
        if (isset($map['PdnsId'])) {
            $model->pdnsId = $map['PdnsId'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }

        return $model;
    }
}
