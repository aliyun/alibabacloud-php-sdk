<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota\list_;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota\managedRulesGroup;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota\page;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota\scenePolicy;
use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @description Quota information related to custom lists.
     *
     * @var list_
     */
    public $list;

    /**
     * @description Quota information related to the WAF managed rules group.
     *
     * @var managedRulesGroup
     */
    public $managedRulesGroup;

    /**
     * @description Quota information related to custom response pages.
     *
     * @var page
     */
    public $page;

    /**
     * @description Quota information related to scene protection.
     *
     * @var scenePolicy
     */
    public $scenePolicy;
    protected $_name = [
        'list' => 'List',
        'managedRulesGroup' => 'ManagedRulesGroup',
        'page' => 'Page',
        'scenePolicy' => 'ScenePolicy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }
        if (null !== $this->managedRulesGroup) {
            $res['ManagedRulesGroup'] = null !== $this->managedRulesGroup ? $this->managedRulesGroup->toMap() : null;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->scenePolicy) {
            $res['ScenePolicy'] = null !== $this->scenePolicy ? $this->scenePolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }
        if (isset($map['ManagedRulesGroup'])) {
            $model->managedRulesGroup = managedRulesGroup::fromMap($map['ManagedRulesGroup']);
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['ScenePolicy'])) {
            $model->scenePolicy = scenePolicy::fromMap($map['ScenePolicy']);
        }

        return $model;
    }
}
