<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments\dependencies;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments\policies;

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
    protected $_name = [
        'dependencies' => 'Dependencies',
        'description' => 'Description',
        'enable' => 'Enable',
        'label' => 'Label',
        'name' => 'Name',
        'policies' => 'Policies',
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
            $res['Dependencies'] = null !== $this->dependencies ? $this->dependencies->toArray($noStream) : $this->dependencies;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policies) {
            $res['Policies'] = null !== $this->policies ? $this->policies->toArray($noStream) : $this->policies;
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
        if (isset($map['Dependencies'])) {
            $model->dependencies = dependencies::fromMap($map['Dependencies']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Policies'])) {
            $model->policies = policies::fromMap($map['Policies']);
        }

        return $model;
    }
}
