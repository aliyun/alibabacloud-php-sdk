<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListResponseBody\domainListResponseList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeDomainListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var domainListResponseList[]
     */
    public $domainListResponseList;
    protected $_name = [
        'requestId'              => 'RequestId',
        'pageInfo'               => 'PageInfo',
        'domainListResponseList' => 'DomainListResponseList',
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
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->domainListResponseList) {
            $res['DomainListResponseList'] = [];
            if (null !== $this->domainListResponseList && \is_array($this->domainListResponseList)) {
                $n = 0;
                foreach ($this->domainListResponseList as $item) {
                    $res['DomainListResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['DomainListResponseList'])) {
            if (!empty($map['DomainListResponseList'])) {
                $model->domainListResponseList = [];
                $n                             = 0;
                foreach ($map['DomainListResponseList'] as $item) {
                    $model->domainListResponseList[$n++] = null !== $item ? domainListResponseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
