<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class OperateVulsRequest extends Model
{
    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $uuids;

    /**
     * @var string[]
     */
    public $vulNames;
    protected $_name = [
        'operateType' => 'OperateType',
        'type' => 'Type',
        'uuids' => 'Uuids',
        'vulNames' => 'VulNames',
    ];

    public function validate()
    {
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        if (\is_array($this->vulNames)) {
            Model::validateArray($this->vulNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1 = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vulNames) {
            if (\is_array($this->vulNames)) {
                $res['VulNames'] = [];
                $n1 = 0;
                foreach ($this->vulNames as $item1) {
                    $res['VulNames'][$n1] = $item1;
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
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1 = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VulNames'])) {
            if (!empty($map['VulNames'])) {
                $model->vulNames = [];
                $n1 = 0;
                foreach ($map['VulNames'] as $item1) {
                    $model->vulNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
