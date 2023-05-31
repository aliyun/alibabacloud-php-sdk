<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRulesResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRulesResponseBody\userDefineRuleList;
use AlibabaCloud\Tea\Model;

class ListClientUserDefineRulesResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example A4EB8B1C-1DEC-5E18-BCD0-D1BBB393***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the rules.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userDefineRuleList) {
            $res['UserDefineRuleList'] = [];
            if (null !== $this->userDefineRuleList && \is_array($this->userDefineRuleList)) {
                $n = 0;
                foreach ($this->userDefineRuleList as $item) {
                    $res['UserDefineRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientUserDefineRulesResponseBody
     */
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
                $n                         = 0;
                foreach ($map['UserDefineRuleList'] as $item) {
                    $model->userDefineRuleList[$n++] = null !== $item ? userDefineRuleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
