<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\hostSecurityContext\sysctl;

class hostSecurityContext extends Model
{
    /**
     * @var sysctl[]
     */
    public $sysctl;
    protected $_name = [
        'sysctl' => 'Sysctl',
    ];

    public function validate()
    {
        if (\is_array($this->sysctl)) {
            Model::validateArray($this->sysctl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sysctl) {
            if (\is_array($this->sysctl)) {
                $res['Sysctl'] = [];
                $n1 = 0;
                foreach ($this->sysctl as $item1) {
                    $res['Sysctl'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Sysctl'])) {
            if (!empty($map['Sysctl'])) {
                $model->sysctl = [];
                $n1 = 0;
                foreach ($map['Sysctl'] as $item1) {
                    $model->sysctl[$n1++] = sysctl::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
