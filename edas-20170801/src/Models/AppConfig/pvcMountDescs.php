<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\pvcMountDescs\mountPaths;

class pvcMountDescs extends Model
{
    /**
     * @var mountPaths[]
     */
    public $mountPaths;

    /**
     * @var string
     */
    public $pvcName;
    protected $_name = [
        'mountPaths' => 'MountPaths',
        'pvcName' => 'PvcName',
    ];

    public function validate()
    {
        if (\is_array($this->mountPaths)) {
            Model::validateArray($this->mountPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountPaths) {
            if (\is_array($this->mountPaths)) {
                $res['MountPaths'] = [];
                $n1 = 0;
                foreach ($this->mountPaths as $item1) {
                    $res['MountPaths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pvcName) {
            $res['PvcName'] = $this->pvcName;
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
        if (isset($map['MountPaths'])) {
            if (!empty($map['MountPaths'])) {
                $model->mountPaths = [];
                $n1 = 0;
                foreach ($map['MountPaths'] as $item1) {
                    $model->mountPaths[$n1] = mountPaths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PvcName'])) {
            $model->pvcName = $map['PvcName'];
        }

        return $model;
    }
}
