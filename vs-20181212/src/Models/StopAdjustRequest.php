<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class StopAdjustRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $iris;

    /**
     * @var bool
     */
    public $focus;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'showLog' => 'ShowLog',
        'id'      => 'Id',
        'iris'    => 'Iris',
        'focus'   => 'Focus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->iris) {
            $res['Iris'] = $this->iris;
        }
        if (null !== $this->focus) {
            $res['Focus'] = $this->focus;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Iris'])) {
            $model->iris = $map['Iris'];
        }
        if (isset($map['Focus'])) {
            $model->focus = $map['Focus'];
        }

        return $model;
    }
}
