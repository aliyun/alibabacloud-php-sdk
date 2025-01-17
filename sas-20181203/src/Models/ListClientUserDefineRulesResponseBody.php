<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRulesResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRulesResponseBody\userDefineRuleList;

class ListClientUserDefineRulesResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var userDefineRuleList[]
     */
    public $userDefineRuleList;
    protected $_name = [
        'pageInfo'           => 'PageInfo',
        'requestId'          => 'RequestId',
        'userDefineRuleList' => 'UserDefineRuleList',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->userDefineRuleList)) {
            Model::validateArray($this->userDefineRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userDefineRuleList) {
            if (\is_array($this->userDefineRuleList)) {
                $res['UserDefineRuleList'] = [];
                $n1                        = 0;
                foreach ($this->userDefineRuleList as $item1) {
                    $res['UserDefineRuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserDefineRuleList'])) {
            if (!empty($map['UserDefineRuleList'])) {
                $model->userDefineRuleList = [];
                $n1                        = 0;
                foreach ($map['UserDefineRuleList'] as $item1) {
                    $model->userDefineRuleList[$n1++] = userDefineRuleList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
