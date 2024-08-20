<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafGroupRequest extends Model
{
    /**
     * @description The ID of the WAF rule group. You can query the ID by calling the [DescribeDcdnWafGroups](~~DescribeDcdnWafGroups~~) operation.
     *
     * This parameter is required.
     * @example 1012
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the response. Valid values:
     *
     *   **en**: English.
     *   **zh**: Chinese.
     *
     * This parameter is required.
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query conditions. The value is a JSON string in the following format:
     *
     * >  If you do not specify this parameter, all protection rules are queried.
     * @example {\\"RiskLevel\\":\\"\\",\\"ProtectionType\\":\\"\\",\\"ApplicationType\\":\\"\\",\\"RuleIdLike\\":\\"\\"}
     *
     * @var string
     */
    public $queryArgs;

    /**
     * @description The range of the rule group to be queried.
     *
     *   **in**: Rules in the rule group are returned.
     *   **out**: Rules that are in the full rule set but are not in the rule group are returned.
     *
     * This parameter is required.
     * @example in
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'id'         => 'Id',
        'language'   => 'Language',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'queryArgs'  => 'QueryArgs',
        'scope'      => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = $this->queryArgs;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = $map['QueryArgs'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
