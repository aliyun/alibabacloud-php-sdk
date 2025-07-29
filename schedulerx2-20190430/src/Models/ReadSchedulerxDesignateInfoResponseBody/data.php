<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateInfoResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateInfoResponseBody\data\designateDetailVos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description -
     *
     * @var designateDetailVos[]
     */
    public $designateDetailVos;

    /**
     * @example 1
     *
     * @var int
     */
    public $designateType;

    /**
     * @example true
     *
     * @var bool
     */
    public $transferable;
    protected $_name = [
        'designateDetailVos' => 'DesignateDetailVos',
        'designateType' => 'DesignateType',
        'transferable' => 'Transferable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->designateDetailVos) {
            $res['DesignateDetailVos'] = [];
            if (null !== $this->designateDetailVos && \is_array($this->designateDetailVos)) {
                $n = 0;
                foreach ($this->designateDetailVos as $item) {
                    $res['DesignateDetailVos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->designateType) {
            $res['DesignateType'] = $this->designateType;
        }
        if (null !== $this->transferable) {
            $res['Transferable'] = $this->transferable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesignateDetailVos'])) {
            if (!empty($map['DesignateDetailVos'])) {
                $model->designateDetailVos = [];
                $n = 0;
                foreach ($map['DesignateDetailVos'] as $item) {
                    $model->designateDetailVos[$n++] = null !== $item ? designateDetailVos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DesignateType'])) {
            $model->designateType = $map['DesignateType'];
        }
        if (isset($map['Transferable'])) {
            $model->transferable = $map['Transferable'];
        }

        return $model;
    }
}
