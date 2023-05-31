<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageResponseBody\interceptionRuleList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListInterceptionRulePageResponseBody extends Model
{
    /**
     * @description An array that consists of information about the defense rules.
     *
     * @var interceptionRuleList[]
     */
    public $interceptionRuleList;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example ACF97412-FD09-4D1F-994F-34DF12BR****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'interceptionRuleList' => 'InterceptionRuleList',
        'pageInfo'             => 'PageInfo',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interceptionRuleList) {
            $res['InterceptionRuleList'] = [];
            if (null !== $this->interceptionRuleList && \is_array($this->interceptionRuleList)) {
                $n = 0;
                foreach ($this->interceptionRuleList as $item) {
                    $res['InterceptionRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListInterceptionRulePageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InterceptionRuleList'])) {
            if (!empty($map['InterceptionRuleList'])) {
                $model->interceptionRuleList = [];
                $n                           = 0;
                foreach ($map['InterceptionRuleList'] as $item) {
                    $model->interceptionRuleList[$n++] = null !== $item ? interceptionRuleList::fromMap($item) : $item;
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
