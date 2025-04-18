<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class BatchSaveInstructionStatusRequest extends Model
{
    /**
     * @var string
     */
    public $factoryId;

    /**
     * @var string
     */
    public $pKey;

    /**
     * @var string
     */
    public $statusList;
    protected $_name = [
        'factoryId' => 'factoryId',
        'pKey' => 'pKey',
        'statusList' => 'statusList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->factoryId) {
            $res['factoryId'] = $this->factoryId;
        }

        if (null !== $this->pKey) {
            $res['pKey'] = $this->pKey;
        }

        if (null !== $this->statusList) {
            $res['statusList'] = $this->statusList;
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
        if (isset($map['factoryId'])) {
            $model->factoryId = $map['factoryId'];
        }

        if (isset($map['pKey'])) {
            $model->pKey = $map['pKey'];
        }

        if (isset($map['statusList'])) {
            $model->statusList = $map['statusList'];
        }

        return $model;
    }
}
