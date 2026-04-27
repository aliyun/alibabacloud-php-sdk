<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CheckPolarFsQuotaConsistencyRequest extends Model
{
    /**
     * @var bool
     */
    public $enableRepair;

    /**
     * @var bool
     */
    public $enableStrictCalculate;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $polarFsInstanceId;
    protected $_name = [
        'enableRepair' => 'EnableRepair',
        'enableStrictCalculate' => 'EnableStrictCalculate',
        'path' => 'Path',
        'polarFsInstanceId' => 'PolarFsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableRepair) {
            $res['EnableRepair'] = $this->enableRepair;
        }

        if (null !== $this->enableStrictCalculate) {
            $res['EnableStrictCalculate'] = $this->enableStrictCalculate;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
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
        if (isset($map['EnableRepair'])) {
            $model->enableRepair = $map['EnableRepair'];
        }

        if (isset($map['EnableStrictCalculate'])) {
            $model->enableStrictCalculate = $map['EnableStrictCalculate'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        return $model;
    }
}
