<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListResponseBody\domainListResponseList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListResponseBody\pageInfo;

class DescribeDomainListResponseBody extends Model
{
    /**
     * @var domainListResponseList[]
     */
    public $domainListResponseList;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainListResponseList' => 'DomainListResponseList',
        'pageInfo'               => 'PageInfo',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainListResponseList)) {
            Model::validateArray($this->domainListResponseList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainListResponseList) {
            if (\is_array($this->domainListResponseList)) {
                $res['DomainListResponseList'] = [];
                $n1                            = 0;
                foreach ($this->domainListResponseList as $item1) {
                    $res['DomainListResponseList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['DomainListResponseList'])) {
            if (!empty($map['DomainListResponseList'])) {
                $model->domainListResponseList = [];
                $n1                            = 0;
                foreach ($map['DomainListResponseList'] as $item1) {
                    $model->domainListResponseList[$n1++] = domainListResponseList::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
