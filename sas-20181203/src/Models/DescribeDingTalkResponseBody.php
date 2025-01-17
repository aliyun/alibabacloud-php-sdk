<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkResponseBody\actionList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkResponseBody\pageInfo;

class DescribeDingTalkResponseBody extends Model
{
    /**
     * @var actionList[]
     */
    public $actionList;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'actionList' => 'ActionList',
        'pageInfo'   => 'PageInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->actionList)) {
            Model::validateArray($this->actionList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionList) {
            if (\is_array($this->actionList)) {
                $res['ActionList'] = [];
                $n1                = 0;
                foreach ($this->actionList as $item1) {
                    $res['ActionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ActionList'])) {
            if (!empty($map['ActionList'])) {
                $model->actionList = [];
                $n1                = 0;
                foreach ($map['ActionList'] as $item1) {
                    $model->actionList[$n1++] = actionList::fromMap($item1);
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
