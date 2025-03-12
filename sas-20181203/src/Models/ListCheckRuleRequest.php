<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCheckRuleRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * > You can call the [ListCheckResult](~~ListCheckResult~~) API to get the check item ID.
     * @example 58
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The name of the check item.
     *
     * @example checkName
     *
     * @var string
     */
    public $checkName;

    /**
     * @description The page number displayed in a paginated query.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Set the language type for the request and response messages. The default is **zh**. Values:
     *
     * - en: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of check items displayed per page in a paginated query. The default value is **20**, indicating 20 check items per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of rule. Default is **WHITE**. Values:
     * - **WHITE**: Add to whitelist
     * @example WHITE
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The scope where the rule applies. Values:
     * - **INSTNACE**: Instance
     * - **ITEM**: Check item
     * @example INSTANCE
     *
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'checkId'     => 'CheckId',
        'checkName'   => 'CheckName',
        'currentPage' => 'CurrentPage',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'ruleType'    => 'RuleType',
        'scopeType'   => 'ScopeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
