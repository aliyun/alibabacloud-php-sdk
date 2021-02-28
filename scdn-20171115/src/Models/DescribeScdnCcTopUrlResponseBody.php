<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopUrlResponseBody\attackUrlDataList;
use AlibabaCloud\Tea\Model;

class DescribeScdnCcTopUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $total;

    /**
     * @var attackUrlDataList
     */
    public $attackUrlDataList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'domainName'        => 'DomainName',
        'total'             => 'Total',
        'attackUrlDataList' => 'AttackUrlDataList',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->attackUrlDataList) {
            $res['AttackUrlDataList'] = null !== $this->attackUrlDataList ? $this->attackUrlDataList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['AttackUrlDataList'])) {
            $model->attackUrlDataList = attackUrlDataList::fromMap($map['AttackUrlDataList']);
        }

        return $model;
    }
}
