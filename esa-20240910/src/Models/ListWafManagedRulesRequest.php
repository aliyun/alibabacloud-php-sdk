<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesRequest\queryArgs;
use AlibabaCloud\Tea\Model;

class ListWafManagedRulesRequest extends Model
{
    /**
     * @description The attack type. Valid values:
     *
     *   SQL injection
     *   Cross-site scripting
     *   Code execution
     *   CRLF
     *   Local file inclusion
     *   Remote file inclusion
     *   webshell
     *   Cross-site request forgery
     *   Others
     *   SEMA
     *
     * This parameter is required.
     *
     * @example 11
     *
     * @var int
     */
    public $attackType;

    /**
     * @description The ID of the WAF rule.
     *
     * This parameter is required.
     *
     * @example 10000001
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
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $protectionLevel;

    /**
     * @description The query conditions.
     *
     * @var queryArgs
     */
    public $queryArgs;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'attackType' => 'AttackType',
        'id' => 'Id',
        'language' => 'Language',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'protectionLevel' => 'ProtectionLevel',
        'queryArgs' => 'QueryArgs',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
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
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = null !== $this->queryArgs ? $this->queryArgs->toMap() : null;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWafManagedRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
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
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = queryArgs::fromMap($map['QueryArgs']);
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
