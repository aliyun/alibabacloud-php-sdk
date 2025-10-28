<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\configMountDescs\mountItems;

class configMountDescs extends Model
{
    /**
     * @var mountItems[]
     */
    public $mountItems;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'mountItems' => 'MountItems',
        'mountPath' => 'MountPath',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->mountItems)) {
            Model::validateArray($this->mountItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountItems) {
            if (\is_array($this->mountItems)) {
                $res['MountItems'] = [];
                $n1 = 0;
                foreach ($this->mountItems as $item1) {
                    $res['MountItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['MountItems'])) {
            if (!empty($map['MountItems'])) {
                $model->mountItems = [];
                $n1 = 0;
                foreach ($map['MountItems'] as $item1) {
                    $model->mountItems[$n1] = mountItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
