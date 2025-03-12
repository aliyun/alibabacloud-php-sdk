<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDingTalkRequest extends Model
{
    /**
     * @description The number of the page to return.Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page.Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the notification.
     *
     * @example Vulnerability notification
     *
     * @var string
     */
    public $ruleActionName;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'ruleActionName' => 'RuleActionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleActionName) {
            $res['RuleActionName'] = $this->ruleActionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDingTalkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleActionName'])) {
            $model->ruleActionName = $map['RuleActionName'];
        }

        return $model;
    }
}
