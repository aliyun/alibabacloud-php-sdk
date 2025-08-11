<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetSwitchInfoResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var int
     */
    public $isOpenColumnLevelPermission;

    /**
     * @var int
     */
    public $isOpenRowLevelPermission;
    protected $_name = [
        'cubeId' => 'CubeId',
        'isOpenColumnLevelPermission' => 'IsOpenColumnLevelPermission',
        'isOpenRowLevelPermission' => 'IsOpenRowLevelPermission',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        if (null !== $this->isOpenColumnLevelPermission) {
            $res['IsOpenColumnLevelPermission'] = $this->isOpenColumnLevelPermission;
        }

        if (null !== $this->isOpenRowLevelPermission) {
            $res['IsOpenRowLevelPermission'] = $this->isOpenRowLevelPermission;
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
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['IsOpenColumnLevelPermission'])) {
            $model->isOpenColumnLevelPermission = $map['IsOpenColumnLevelPermission'];
        }

        if (isset($map['IsOpenRowLevelPermission'])) {
            $model->isOpenRowLevelPermission = $map['IsOpenRowLevelPermission'];
        }

        return $model;
    }
}
