<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceRequest\components\dataDisk;

class components extends Model
{
    /**
     * @var int
     */
    public $cuNum;

    /**
     * @var string
     */
    public $cuType;

    /**
     * @var dataDisk
     */
    public $dataDisk;

    /**
     * @var string
     */
    public $diskSizeType;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cuNum' => 'cuNum',
        'cuType' => 'cuType',
        'dataDisk' => 'dataDisk',
        'diskSizeType' => 'diskSizeType',
        'replica' => 'replica',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->dataDisk) {
            $this->dataDisk->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cuNum) {
            $res['cuNum'] = $this->cuNum;
        }

        if (null !== $this->cuType) {
            $res['cuType'] = $this->cuType;
        }

        if (null !== $this->dataDisk) {
            $res['dataDisk'] = null !== $this->dataDisk ? $this->dataDisk->toArray($noStream) : $this->dataDisk;
        }

        if (null !== $this->diskSizeType) {
            $res['diskSizeType'] = $this->diskSizeType;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['cuNum'])) {
            $model->cuNum = $map['cuNum'];
        }

        if (isset($map['cuType'])) {
            $model->cuType = $map['cuType'];
        }

        if (isset($map['dataDisk'])) {
            $model->dataDisk = dataDisk::fromMap($map['dataDisk']);
        }

        if (isset($map['diskSizeType'])) {
            $model->diskSizeType = $map['diskSizeType'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
