<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class StopAdjustRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $focus;

    /**
     * @description This parameter is required.
     *
     * @example 348*****380-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $iris;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'focus'   => 'Focus',
        'id'      => 'Id',
        'iris'    => 'Iris',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->focus) {
            $res['Focus'] = $this->focus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->iris) {
            $res['Iris'] = $this->iris;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopAdjustRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Focus'])) {
            $model->focus = $map['Focus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Iris'])) {
            $model->iris = $map['Iris'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
