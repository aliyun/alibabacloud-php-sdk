<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnInstallClusterAddonsRequest\addons;

class UnInstallClusterAddonsRequest extends Model
{
    /**
     * @var addons[]
     */
    public $addons;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'addons' => 'Addons',
        'clusterId' => 'ClusterId',
    ];

    public function validate()
    {
        if (\is_array($this->addons)) {
            Model::validateArray($this->addons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addons) {
            if (\is_array($this->addons)) {
                $res['Addons'] = [];
                $n1 = 0;
                foreach ($this->addons as $item1) {
                    $res['Addons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['Addons'])) {
            if (!empty($map['Addons'])) {
                $model->addons = [];
                $n1 = 0;
                foreach ($map['Addons'] as $item1) {
                    $model->addons[$n1] = addons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
