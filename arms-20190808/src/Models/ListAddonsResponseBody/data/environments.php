<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments\dependencies;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments\policies;
use AlibabaCloud\Tea\Model;

class environments extends Model
{
    /**
     * @description Dependency list.
     *
     * @var dependencies
     */
    public $dependencies;

    /**
     * @description Description of environment.
     *
     * @example The MySQL service is deployed in a Kubernetes cluster.
     *
     * @var string
     */
    public $description;

    /**
     * @description Whether to enable it.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Label of the environment.
     *
     * @example Container
     *
     * @var string
     */
    public $label;

    /**
     * @description Name of the environment.
     *
     * @example CS
     *
     * @var string
     */
    public $name;

    /**
     * @description Policies list.
     *
     * @var policies
     */
    public $policies;
    protected $_name = [
        'dependencies' => 'Dependencies',
        'description'  => 'Description',
        'enable'       => 'Enable',
        'label'        => 'Label',
        'name'         => 'Name',
        'policies'     => 'Policies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependencies) {
            $res['Dependencies'] = null !== $this->dependencies ? $this->dependencies->toMap() : null;
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
            $res['Policies'] = null !== $this->policies ? $this->policies->toMap() : null;
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
