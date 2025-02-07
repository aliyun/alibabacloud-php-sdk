<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota\list_;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota\managedRulesGroup;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota\page;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota\scenePolicy;

class quota extends Model
{
    /**
     * @var list_
     */
    public $list;
    /**
     * @var managedRulesGroup
     */
    public $managedRulesGroup;
    /**
     * @var page
     */
    public $page;
    /**
     * @var scenePolicy
     */
    public $scenePolicy;
    protected $_name = [
        'list'              => 'List',
        'managedRulesGroup' => 'ManagedRulesGroup',
        'page'              => 'Page',
        'scenePolicy'       => 'ScenePolicy',
    ];

    public function validate()
    {
        if (null !== $this->list) {
            $this->list->validate();
        }
        if (null !== $this->managedRulesGroup) {
            $this->managedRulesGroup->validate();
        }
        if (null !== $this->page) {
            $this->page->validate();
        }
        if (null !== $this->scenePolicy) {
            $this->scenePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toArray($noStream) : $this->list;
        }

        if (null !== $this->managedRulesGroup) {
            $res['ManagedRulesGroup'] = null !== $this->managedRulesGroup ? $this->managedRulesGroup->toArray($noStream) : $this->managedRulesGroup;
        }

        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
        }

        if (null !== $this->scenePolicy) {
            $res['ScenePolicy'] = null !== $this->scenePolicy ? $this->scenePolicy->toArray($noStream) : $this->scenePolicy;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
