<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources;
use AlibabaCloud\Tea\Model;

class permApplyOrderDetail extends Model
{
    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var int
     */
    public $permType;

    /**
     * @var int
     */
    public $seconds;

    /**
     * @var string
     */
    public $applyType;
    protected $_name = [
        'resources' => 'Resources',
        'permType'  => 'PermType',
        'seconds'   => 'Seconds',
        'applyType' => 'ApplyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }
        if (null !== $this->seconds) {
            $res['Seconds'] = $this->seconds;
        }
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permApplyOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }
        if (isset($map['Seconds'])) {
            $model->seconds = $map['Seconds'];
        }
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }

        return $model;
    }
}
