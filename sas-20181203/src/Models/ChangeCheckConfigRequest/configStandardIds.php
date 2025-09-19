<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigRequest;

use AlibabaCloud\Dara\Model;

class configStandardIds extends Model
{
    /**
     * @var int[]
     */
    public $addIds;

    /**
     * @var int[]
     */
    public $removeIds;
    protected $_name = [
        'addIds' => 'AddIds',
        'removeIds' => 'RemoveIds',
    ];

    public function validate()
    {
        if (\is_array($this->addIds)) {
            Model::validateArray($this->addIds);
        }
        if (\is_array($this->removeIds)) {
            Model::validateArray($this->removeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addIds) {
            if (\is_array($this->addIds)) {
                $res['AddIds'] = [];
                $n1 = 0;
                foreach ($this->addIds as $item1) {
                    $res['AddIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->removeIds) {
            if (\is_array($this->removeIds)) {
                $res['RemoveIds'] = [];
                $n1 = 0;
                foreach ($this->removeIds as $item1) {
                    $res['RemoveIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AddIds'])) {
            if (!empty($map['AddIds'])) {
                $model->addIds = [];
                $n1 = 0;
                foreach ($map['AddIds'] as $item1) {
                    $model->addIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RemoveIds'])) {
            if (!empty($map['RemoveIds'])) {
                $model->removeIds = [];
                $n1 = 0;
                foreach ($map['RemoveIds'] as $item1) {
                    $model->removeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
