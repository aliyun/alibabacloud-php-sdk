<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopIpResponseBody\attackIpDataList;
use AlibabaCloud\Tea\Model;

class DescribeScdnCcTopIpResponseBody extends Model
{
    /**
     * @var attackIpDataList
     */
    public $attackIpDataList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'attackIpDataList' => 'AttackIpDataList',
        'domainName'       => 'DomainName',
        'requestId'        => 'RequestId',
        'total'            => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackIpDataList) {
            $res['AttackIpDataList'] = null !== $this->attackIpDataList ? $this->attackIpDataList->toMap() : null;
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
     * @return DescribeScdnCcTopIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackIpDataList'])) {
            $model->attackIpDataList = attackIpDataList::fromMap($map['AttackIpDataList']);
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
