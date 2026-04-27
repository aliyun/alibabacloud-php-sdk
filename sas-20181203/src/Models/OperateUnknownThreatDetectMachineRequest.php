<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class OperateUnknownThreatDetectMachineRequest extends Model
{
    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'operateType' => 'OperateType',
        'status' => 'Status',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1 = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1] = $item1;
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1 = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
