<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\dependencies;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments\policies;

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

    public function validate()
    {
        if (null !== $this->dependencies) {
            $this->dependencies->validate();
        }
        if (null !== $this->policies) {
            $this->policies->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependencies) {
            $res['dependencies'] = null !== $this->dependencies ? $this->dependencies->toArray($noStream) : $this->dependencies;
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
            $res['policies'] = null !== $this->policies ? $this->policies->toArray($noStream) : $this->policies;
        }

        if (null !== $this->policyType) {
            $res['policyType'] = $this->policyType;
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
