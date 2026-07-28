<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\InstanceDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\InstanceDetail\components\dataDisk;
use AlibabaCloud\SDK\Milvus\V20231012\Models\InstanceDetail\components\podsList;

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
     * @var string
     */
    public $payType;

    /**
     * @var podsList[]
     */
    public $podsList;

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
        'payType' => 'payType',
        'podsList' => 'podsList',
        'replica' => 'replica',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->dataDisk) {
            $this->dataDisk->validate();
        }
        if (\is_array($this->podsList)) {
            Model::validateArray($this->podsList);
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

        if (null !== $this->payType) {
            $res['payType'] = $this->payType;
        }

        if (null !== $this->podsList) {
            if (\is_array($this->podsList)) {
                $res['podsList'] = [];
                $n1 = 0;
                foreach ($this->podsList as $item1) {
                    $res['podsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['payType'])) {
            $model->payType = $map['payType'];
        }

        if (isset($map['podsList'])) {
            if (!empty($map['podsList'])) {
                $model->podsList = [];
                $n1 = 0;
                foreach ($map['podsList'] as $item1) {
                    $model->podsList[$n1] = podsList::fromMap($item1);
                    ++$n1;
                }
            }
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
