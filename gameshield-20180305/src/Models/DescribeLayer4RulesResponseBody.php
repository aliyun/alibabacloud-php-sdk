<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeLayer4RulesResponseBody\extInfo;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeLayer4RulesResponseBody\l4RuleList;
use AlibabaCloud\Tea\Model;

class DescribeLayer4RulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var extInfo
     */
    public $extInfo;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var l4RuleList[]
     */
    public $l4RuleList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'extInfo'    => 'ExtInfo',
        'total'      => 'Total',
        'promptInfo' => 'PromptInfo',
        'l4RuleList' => 'L4RuleList',
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
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = null !== $this->extInfo ? $this->extInfo->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->l4RuleList) {
            $res['L4RuleList'] = [];
            if (null !== $this->l4RuleList && \is_array($this->l4RuleList)) {
                $n = 0;
                foreach ($this->l4RuleList as $item) {
                    $res['L4RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer4RulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = extInfo::fromMap($map['ExtInfo']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['L4RuleList'])) {
            if (!empty($map['L4RuleList'])) {
                $model->l4RuleList = [];
                $n                 = 0;
                foreach ($map['L4RuleList'] as $item) {
                    $model->l4RuleList[$n++] = null !== $item ? l4RuleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
