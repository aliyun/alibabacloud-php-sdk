<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesRequest\queryArgs;
use AlibabaCloud\Tea\Model;

class ListWafTemplateRulesRequest extends Model
{
    /**
     * @description The WAF rule category, which is used to filter template rules of a specific category.
     *
     * @example http_anti_scan
     *
     * @var string
     */
    public $phase;

    /**
     * @description The query parameter, which is used to filter template rules based on criteria such as the rule type.
     *
     * @example http_anti_scan
     *
     * @var queryArgs
     */
    public $queryArgs;

    /**
     * @description 站点ID，可通过调用[ListSites](https://help.aliyun.com/document_detail/2850189.html)接口获取。
     *
     * @example 1
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'phase' => 'Phase',
        'queryArgs' => 'QueryArgs',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
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
     * @return ListWafTemplateRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
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
