<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListAutoTagRulesResponseBody\autoTagRuleList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAutoTagRulesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListAutoTagRulesResponseBody extends Model
{
    /**
     * @description The asset auto-tagging rules.
     *
     * @var autoTagRuleList[]
     */
    public $autoTagRuleList;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 1383B0DB-D5D6-4B0C-9E6B-75939C8E67FE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoTagRuleList' => 'AutoTagRuleList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoTagRuleList) {
            $res['AutoTagRuleList'] = [];
            if (null !== $this->autoTagRuleList && \is_array($this->autoTagRuleList)) {
                $n = 0;
                foreach ($this->autoTagRuleList as $item) {
                    $res['AutoTagRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAutoTagRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoTagRuleList'])) {
            if (!empty($map['AutoTagRuleList'])) {
                $model->autoTagRuleList = [];
                $n = 0;
                foreach ($map['AutoTagRuleList'] as $item) {
                    $model->autoTagRuleList[$n++] = null !== $item ? autoTagRuleList::fromMap($item) : $item;
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
