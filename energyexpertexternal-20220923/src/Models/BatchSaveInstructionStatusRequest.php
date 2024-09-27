<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class BatchSaveInstructionStatusRequest extends Model
{
    /**
     * @example ***
     *
     * @var string
     */
    public $factoryId;

    /**
     * @example ib
     *
     * @var string
     */
    public $pKey;

    /**
     * @var string
     */
    public $statusList;
    protected $_name = [
        'factoryId'  => 'factoryId',
        'pKey'       => 'pKey',
        'statusList' => 'statusList',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return BatchSaveInstructionStatusRequest
     */
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
