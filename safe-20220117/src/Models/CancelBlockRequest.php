<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;

class CancelBlockRequest extends Model
{
    /**
     * @var int
     */
    public $blockId;

    /**
     * @var string
     */
    public $cancelBLockDesc;

    /**
     * @var string
     */
    public $createEmpId;
    protected $_name = [
        'blockId' => 'BlockId',
        'cancelBLockDesc' => 'CancelBLockDesc',
        'createEmpId' => 'CreateEmpId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }

        if (null !== $this->cancelBLockDesc) {
            $res['CancelBLockDesc'] = $this->cancelBLockDesc;
        }

        if (null !== $this->createEmpId) {
            $res['CreateEmpId'] = $this->createEmpId;
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
        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }

        if (isset($map['CancelBLockDesc'])) {
            $model->cancelBLockDesc = $map['CancelBLockDesc'];
        }

        if (isset($map['CreateEmpId'])) {
            $model->createEmpId = $map['CreateEmpId'];
        }

        return $model;
    }
}
