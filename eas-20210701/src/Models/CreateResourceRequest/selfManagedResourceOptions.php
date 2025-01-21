<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest\selfManagedResourceOptions\nodeTolerations;

class selfManagedResourceOptions extends Model
{
    /**
     * @var string
     */
    public $externalClusterId;
    /**
     * @var string[]
     */
    public $nodeMatchLabels;
    /**
     * @var nodeTolerations[]
     */
    public $nodeTolerations;
    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'externalClusterId' => 'ExternalClusterId',
        'nodeMatchLabels'   => 'NodeMatchLabels',
        'nodeTolerations'   => 'NodeTolerations',
        'roleName'          => 'RoleName',
    ];

    public function validate()
    {
        if (\is_array($this->nodeMatchLabels)) {
            Model::validateArray($this->nodeMatchLabels);
        }
        if (\is_array($this->nodeTolerations)) {
            Model::validateArray($this->nodeTolerations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalClusterId) {
            $res['ExternalClusterId'] = $this->externalClusterId;
        }

        if (null !== $this->nodeMatchLabels) {
            if (\is_array($this->nodeMatchLabels)) {
                $res['NodeMatchLabels'] = [];
                foreach ($this->nodeMatchLabels as $key1 => $value1) {
                    $res['NodeMatchLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->nodeTolerations) {
            if (\is_array($this->nodeTolerations)) {
                $res['NodeTolerations'] = [];
                $n1                     = 0;
                foreach ($this->nodeTolerations as $item1) {
                    $res['NodeTolerations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['ExternalClusterId'])) {
            $model->externalClusterId = $map['ExternalClusterId'];
        }

        if (isset($map['NodeMatchLabels'])) {
            if (!empty($map['NodeMatchLabels'])) {
                $model->nodeMatchLabels = [];
                foreach ($map['NodeMatchLabels'] as $key1 => $value1) {
                    $model->nodeMatchLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['NodeTolerations'])) {
            if (!empty($map['NodeTolerations'])) {
                $model->nodeTolerations = [];
                $n1                     = 0;
                foreach ($map['NodeTolerations'] as $item1) {
                    $model->nodeTolerations[$n1++] = nodeTolerations::fromMap($item1);
                }
            }
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
