<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleInstanceRequest\instanceList;
use AlibabaCloud\Tea\Model;

class ListCheckRuleInstanceRequest extends Model
{
    /**
     * @description The page number of the current page when performing a paginated query.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Instance list.
     *
     * @var instanceList[]
     */
    public $instanceList;

    /**
     * @description The maximum number of items per page in a paginated query. The default value is **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Rule ID.
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'instanceList' => 'InstanceList',
        'pageSize'     => 'PageSize',
        'ruleId'       => 'RuleId',
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
        if (null !== $this->instanceList) {
            $res['InstanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['InstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckRuleInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['InstanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? instanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
