<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources;

class permApplyOrderDetail extends Model
{
    /**
     * @var string
     */
    public $applyType;
    /**
     * @var int
     */
    public $permType;
    /**
     * @var resources[]
     */
    public $resources;
    /**
     * @var int
     */
    public $seconds;
    protected $_name = [
        'applyType' => 'ApplyType',
        'permType'  => 'PermType',
        'resources' => 'Resources',
        'seconds'   => 'Seconds',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }

        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1               = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->seconds) {
            $res['Seconds'] = $this->seconds;
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
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }

        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1               = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1++] = resources::fromMap($item1);
                }
            }
        }

        if (isset($map['Seconds'])) {
            $model->seconds = $map['Seconds'];
        }

        return $model;
    }
}
