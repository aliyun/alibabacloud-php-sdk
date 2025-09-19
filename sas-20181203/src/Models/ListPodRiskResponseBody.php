<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPodRiskResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPodRiskResponseBody\podRiskList;

class ListPodRiskResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var podRiskList[]
     */
    public $podRiskList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'podRiskList' => 'PodRiskList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->podRiskList)) {
            Model::validateArray($this->podRiskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->podRiskList) {
            if (\is_array($this->podRiskList)) {
                $res['PodRiskList'] = [];
                $n1 = 0;
                foreach ($this->podRiskList as $item1) {
                    $res['PodRiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['PodRiskList'])) {
            if (!empty($map['PodRiskList'])) {
                $model->podRiskList = [];
                $n1 = 0;
                foreach ($map['PodRiskList'] as $item1) {
                    $model->podRiskList[$n1] = podRiskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
