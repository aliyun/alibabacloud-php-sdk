<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddFileProtectBindMachineRequest extends Model
{
    /**
     * @var string[]
     */
    public $alertUuids;

    /**
     * @var string[]
     */
    public $blockUuids;

    /**
     * @var string[]
     */
    public $noneUuids;
    protected $_name = [
        'alertUuids' => 'AlertUuids',
        'blockUuids' => 'BlockUuids',
        'noneUuids' => 'NoneUuids',
    ];

    public function validate()
    {
        if (\is_array($this->alertUuids)) {
            Model::validateArray($this->alertUuids);
        }
        if (\is_array($this->blockUuids)) {
            Model::validateArray($this->blockUuids);
        }
        if (\is_array($this->noneUuids)) {
            Model::validateArray($this->noneUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertUuids) {
            if (\is_array($this->alertUuids)) {
                $res['AlertUuids'] = [];
                $n1 = 0;
                foreach ($this->alertUuids as $item1) {
                    $res['AlertUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->blockUuids) {
            if (\is_array($this->blockUuids)) {
                $res['BlockUuids'] = [];
                $n1 = 0;
                foreach ($this->blockUuids as $item1) {
                    $res['BlockUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noneUuids) {
            if (\is_array($this->noneUuids)) {
                $res['NoneUuids'] = [];
                $n1 = 0;
                foreach ($this->noneUuids as $item1) {
                    $res['NoneUuids'][$n1] = $item1;
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
        if (isset($map['AlertUuids'])) {
            if (!empty($map['AlertUuids'])) {
                $model->alertUuids = [];
                $n1 = 0;
                foreach ($map['AlertUuids'] as $item1) {
                    $model->alertUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BlockUuids'])) {
            if (!empty($map['BlockUuids'])) {
                $model->blockUuids = [];
                $n1 = 0;
                foreach ($map['BlockUuids'] as $item1) {
                    $model->blockUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NoneUuids'])) {
            if (!empty($map['NoneUuids'])) {
                $model->noneUuids = [];
                $n1 = 0;
                foreach ($map['NoneUuids'] as $item1) {
                    $model->noneUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
