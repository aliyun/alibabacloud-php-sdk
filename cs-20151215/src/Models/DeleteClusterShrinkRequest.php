<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DeleteClusterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deleteOptionsShrink;
    /**
     * @var bool
     */
    public $keepSlb;
    /**
     * @var bool
     */
    public $retainAllResources;
    /**
     * @var string
     */
    public $retainResourcesShrink;
    protected $_name = [
        'deleteOptionsShrink'   => 'delete_options',
        'keepSlb'               => 'keep_slb',
        'retainAllResources'    => 'retain_all_resources',
        'retainResourcesShrink' => 'retain_resources',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteOptionsShrink) {
            $res['delete_options'] = $this->deleteOptionsShrink;
        }

        if (null !== $this->keepSlb) {
            $res['keep_slb'] = $this->keepSlb;
        }

        if (null !== $this->retainAllResources) {
            $res['retain_all_resources'] = $this->retainAllResources;
        }

        if (null !== $this->retainResourcesShrink) {
            $res['retain_resources'] = $this->retainResourcesShrink;
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
        if (isset($map['delete_options'])) {
            $model->deleteOptionsShrink = $map['delete_options'];
        }

        if (isset($map['keep_slb'])) {
            $model->keepSlb = $map['keep_slb'];
        }

        if (isset($map['retain_all_resources'])) {
            $model->retainAllResources = $map['retain_all_resources'];
        }

        if (isset($map['retain_resources'])) {
            $model->retainResourcesShrink = $map['retain_resources'];
        }

        return $model;
    }
}
