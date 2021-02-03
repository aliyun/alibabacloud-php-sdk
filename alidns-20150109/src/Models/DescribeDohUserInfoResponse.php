<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDohUserInfoResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pdnsId;

    /**
     * @var int
     */
    public $domainCount;

    /**
     * @var int
     */
    public $subDomainCount;
    protected $_name = [
        'requestId'      => 'RequestId',
        'pdnsId'         => 'PdnsId',
        'domainCount'    => 'DomainCount',
        'subDomainCount' => 'SubDomainCount',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pdnsId', $this->pdnsId, true);
        Model::validateRequired('domainCount', $this->domainCount, true);
        Model::validateRequired('subDomainCount', $this->subDomainCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pdnsId) {
            $res['PdnsId'] = $this->pdnsId;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->subDomainCount) {
            $res['SubDomainCount'] = $this->subDomainCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDohUserInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PdnsId'])) {
            $model->pdnsId = $map['PdnsId'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['SubDomainCount'])) {
            $model->subDomainCount = $map['SubDomainCount'];
        }

        return $model;
    }
}
