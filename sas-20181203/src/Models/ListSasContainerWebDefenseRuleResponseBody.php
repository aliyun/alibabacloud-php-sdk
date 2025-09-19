<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSasContainerWebDefenseRuleResponseBody\containerWebDefenseRuleList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSasContainerWebDefenseRuleResponseBody\pageInfo;

class ListSasContainerWebDefenseRuleResponseBody extends Model
{
    /**
     * @var containerWebDefenseRuleList[]
     */
    public $containerWebDefenseRuleList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerWebDefenseRuleList' => 'ContainerWebDefenseRuleList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->containerWebDefenseRuleList)) {
            Model::validateArray($this->containerWebDefenseRuleList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerWebDefenseRuleList) {
            if (\is_array($this->containerWebDefenseRuleList)) {
                $res['ContainerWebDefenseRuleList'] = [];
                $n1 = 0;
                foreach ($this->containerWebDefenseRuleList as $item1) {
                    $res['ContainerWebDefenseRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ContainerWebDefenseRuleList'])) {
            if (!empty($map['ContainerWebDefenseRuleList'])) {
                $model->containerWebDefenseRuleList = [];
                $n1 = 0;
                foreach ($map['ContainerWebDefenseRuleList'] as $item1) {
                    $model->containerWebDefenseRuleList[$n1] = containerWebDefenseRuleList::fromMap($item1);
                    ++$n1;
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
