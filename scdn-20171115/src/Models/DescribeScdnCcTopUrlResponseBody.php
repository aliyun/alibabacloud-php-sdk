<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopUrlResponseBody\attackUrlDataList;
use AlibabaCloud\Tea\Model;

class DescribeScdnCcTopUrlResponseBody extends Model
{
    /**
     * @var attackUrlDataList
     */
    public $attackUrlDataList;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example FA2EE241-5E9D-488A-B36E-408BF81C077E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 123
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'attackUrlDataList' => 'AttackUrlDataList',
        'domainName'        => 'DomainName',
        'requestId'         => 'RequestId',
        'total'             => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackUrlDataList) {
            $res['AttackUrlDataList'] = null !== $this->attackUrlDataList ? $this->attackUrlDataList->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnCcTopUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackUrlDataList'])) {
            $model->attackUrlDataList = attackUrlDataList::fromMap($map['AttackUrlDataList']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
