<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string[]
     */
    public $networkSourceACL;

    /**
     * @var string[]
     */
    public $networkTypeACL;
    protected $_name = [
        'aliasName' => 'AliasName',
        'instanceDescription' => 'InstanceDescription',
        'instanceName' => 'InstanceName',
        'network' => 'Network',
        'networkSourceACL' => 'NetworkSourceACL',
        'networkTypeACL' => 'NetworkTypeACL',
    ];

    public function validate()
    {
        if (\is_array($this->networkSourceACL)) {
            Model::validateArray($this->networkSourceACL);
        }
        if (\is_array($this->networkTypeACL)) {
            Model::validateArray($this->networkTypeACL);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->networkSourceACL) {
            if (\is_array($this->networkSourceACL)) {
                $res['NetworkSourceACL'] = [];
                $n1 = 0;
                foreach ($this->networkSourceACL as $item1) {
                    $res['NetworkSourceACL'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkTypeACL) {
            if (\is_array($this->networkTypeACL)) {
                $res['NetworkTypeACL'] = [];
                $n1 = 0;
                foreach ($this->networkTypeACL as $item1) {
                    $res['NetworkTypeACL'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['NetworkSourceACL'])) {
            if (!empty($map['NetworkSourceACL'])) {
                $model->networkSourceACL = [];
                $n1 = 0;
                foreach ($map['NetworkSourceACL'] as $item1) {
                    $model->networkSourceACL[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkTypeACL'])) {
            if (!empty($map['NetworkTypeACL'])) {
                $model->networkTypeACL = [];
                $n1 = 0;
                foreach ($map['NetworkTypeACL'] as $item1) {
                    $model->networkTypeACL[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
