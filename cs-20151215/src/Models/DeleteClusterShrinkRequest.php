<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterShrinkRequest extends Model
{
    /**
     * @description 是否保留所有资源,如果设置了该值，将会忽略retain_resources。  true：保留 false：不保留 默认值：fase。
     *
     * @var bool
     */
    public $retainAllResources;

    /**
     * @description 是否保留SLB。  true：保留 false：不保留 默认值：false。
     *
     * @var bool
     */
    public $keepSlb;

    /**
     * @description 要保留的资源列表。
     *
     * @var string
     */
    public $retainResourcesShrink;
    protected $_name = [
        'retainAllResources'    => 'retain_all_resources',
        'keepSlb'               => 'keep_slb',
        'retainResourcesShrink' => 'retain_resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->retainAllResources) {
            $res['retain_all_resources'] = $this->retainAllResources;
        }
        if (null !== $this->keepSlb) {
            $res['keep_slb'] = $this->keepSlb;
        }
        if (null !== $this->retainResourcesShrink) {
            $res['retain_resources'] = $this->retainResourcesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['retain_all_resources'])) {
            $model->retainAllResources = $map['retain_all_resources'];
        }
        if (isset($map['keep_slb'])) {
            $model->keepSlb = $map['keep_slb'];
        }
        if (isset($map['retain_resources'])) {
            $model->retainResourcesShrink = $map['retain_resources'];
        }

        return $model;
    }
}
