<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateInfoResponseBody\data\designateDetailVos;

class data extends Model
{
    /**
     * @var designateDetailVos[]
     */
    public $designateDetailVos;

    /**
     * @var int
     */
    public $designateType;

    /**
     * @var bool
     */
    public $transferable;
    protected $_name = [
        'designateDetailVos' => 'DesignateDetailVos',
        'designateType' => 'DesignateType',
        'transferable' => 'Transferable',
    ];

    public function validate()
    {
        if (\is_array($this->designateDetailVos)) {
            Model::validateArray($this->designateDetailVos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->designateDetailVos) {
            if (\is_array($this->designateDetailVos)) {
                $res['DesignateDetailVos'] = [];
                $n1 = 0;
                foreach ($this->designateDetailVos as $item1) {
                    $res['DesignateDetailVos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesignateDetailVos'])) {
            if (!empty($map['DesignateDetailVos'])) {
                $model->designateDetailVos = [];
                $n1 = 0;
                foreach ($map['DesignateDetailVos'] as $item1) {
                    $model->designateDetailVos[$n1++] = designateDetailVos::fromMap($item1);
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
