<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ContainerInfo extends Model
{
    /**
     * @var string
     */
    public $mainContainer;

    /**
     * @var string[]
     */
    public $sidecarContainers;
    protected $_name = [
        'mainContainer' => 'MainContainer',
        'sidecarContainers' => 'SidecarContainers',
    ];

    public function validate()
    {
        if (\is_array($this->sidecarContainers)) {
            Model::validateArray($this->sidecarContainers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mainContainer) {
            $res['MainContainer'] = $this->mainContainer;
        }

        if (null !== $this->sidecarContainers) {
            if (\is_array($this->sidecarContainers)) {
                $res['SidecarContainers'] = [];
                $n1 = 0;
                foreach ($this->sidecarContainers as $item1) {
                    $res['SidecarContainers'][$n1] = $item1;
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
        if (isset($map['MainContainer'])) {
            $model->mainContainer = $map['MainContainer'];
        }

        if (isset($map['SidecarContainers'])) {
            if (!empty($map['SidecarContainers'])) {
                $model->sidecarContainers = [];
                $n1 = 0;
                foreach ($map['SidecarContainers'] as $item1) {
                    $model->sidecarContainers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
