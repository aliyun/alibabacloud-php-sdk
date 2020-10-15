<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponse\instanceSpecs;

use AlibabaCloud\Tea\Model;

class instanceSpec extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $core;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'core'         => 'Core',
        'memory'       => 'Memory',
        'displayName'  => 'DisplayName',
    ];

    public function validate()
    {
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('core', $this->core, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('displayName', $this->displayName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        return $model;
    }
}
