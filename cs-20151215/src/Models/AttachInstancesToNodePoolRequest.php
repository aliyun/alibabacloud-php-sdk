<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class AttachInstancesToNodePoolRequest extends Model
{
    /**
     * @var bool
     */
    public $formatDisk;
    /**
     * @var string[]
     */
    public $instances;
    /**
     * @var bool
     */
    public $keepInstanceName;
    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'formatDisk'       => 'format_disk',
        'instances'        => 'instances',
        'keepInstanceName' => 'keep_instance_name',
        'password'         => 'password',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1               = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
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
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }

        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n1               = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1++] = $item1;
                }
            }
        }

        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        return $model;
    }
}
