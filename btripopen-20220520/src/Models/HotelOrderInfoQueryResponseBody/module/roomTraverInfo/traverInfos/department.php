<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos;

use AlibabaCloud\Dara\Model;

class department extends Model
{
    /**
     * @var string
     */
    public $cascadeDeptMask;

    /**
     * @var string
     */
    public $cascadeDeptName;

    /**
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @var string
     */
    public $outDepartId;
    protected $_name = [
        'cascadeDeptMask' => 'cascade_dept_mask',
        'cascadeDeptName' => 'cascade_dept_name',
        'departId' => 'depart_id',
        'departName' => 'depart_name',
        'outDepartId' => 'out_depart_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cascadeDeptMask) {
            $res['cascade_dept_mask'] = $this->cascadeDeptMask;
        }

        if (null !== $this->cascadeDeptName) {
            $res['cascade_dept_name'] = $this->cascadeDeptName;
        }

        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }

        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }

        if (null !== $this->outDepartId) {
            $res['out_depart_id'] = $this->outDepartId;
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
        if (isset($map['cascade_dept_mask'])) {
            $model->cascadeDeptMask = $map['cascade_dept_mask'];
        }

        if (isset($map['cascade_dept_name'])) {
            $model->cascadeDeptName = $map['cascade_dept_name'];
        }

        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }

        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }

        if (isset($map['out_depart_id'])) {
            $model->outDepartId = $map['out_depart_id'];
        }

        return $model;
    }
}
