<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListRemediationsRequest extends Model
{
    /**
     * @description The rule ID. Separate multiple rule IDs with commas (,).
     *
     * For more information about how to obtain the ID of a rule, see [ListConfigRules](~~169607~~).
     * @example cr-6b7c626622af00b4****
     *
     * @var string
     */
    public $configRuleIds;

    /**
     * @description 资源列表的页码。起始值：1。
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页查询时设置的每页行数。取值范围：1~50。
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'configRuleIds' => 'ConfigRuleIds',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemediationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
