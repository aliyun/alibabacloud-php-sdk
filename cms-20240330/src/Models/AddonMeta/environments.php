<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta;

use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\dependencies;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies;
use AlibabaCloud\Tea\Model;

class environments extends Model
{
    /**
     * @var dependencies
     */
    public $dependencies;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $name;

    /**
     * @var policies
     */
    public $policies;

    /**
     * @var string
     */
    public $policyType;
    protected $_name = [
        'dependencies' => 'dependencies',
        'description' => 'description',
        'enable' => 'enable',
        'label' => 'label',
        'name' => 'name',
        'policies' => 'policies',
        'policyType' => 'policyType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependencies) {
            $res['dependencies'] = null !== $this->dependencies ? $this->dependencies->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->policies) {
            $res['policies'] = null !== $this->policies ? $this->policies->toMap() : null;
        }
        if (null !== $this->policyType) {
            $res['policyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dependencies'])) {
            $model->dependencies = dependencies::fromMap($map['dependencies']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['policies'])) {
            $model->policies = policies::fromMap($map['policies']);
        }
        if (isset($map['policyType'])) {
            $model->policyType = $map['policyType'];
        }

        return $model;
    }
}
