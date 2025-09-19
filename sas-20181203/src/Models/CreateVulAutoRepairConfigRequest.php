<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateVulAutoRepairConfigRequest\vulAutoRepairConfigList;

class CreateVulAutoRepairConfigRequest extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $type;

    /**
     * @var vulAutoRepairConfigList[]
     */
    public $vulAutoRepairConfigList;
    protected $_name = [
        'reason' => 'Reason',
        'type' => 'Type',
        'vulAutoRepairConfigList' => 'VulAutoRepairConfigList',
    ];

    public function validate()
    {
        if (\is_array($this->vulAutoRepairConfigList)) {
            Model::validateArray($this->vulAutoRepairConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vulAutoRepairConfigList) {
            if (\is_array($this->vulAutoRepairConfigList)) {
                $res['VulAutoRepairConfigList'] = [];
                $n1 = 0;
                foreach ($this->vulAutoRepairConfigList as $item1) {
                    $res['VulAutoRepairConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VulAutoRepairConfigList'])) {
            if (!empty($map['VulAutoRepairConfigList'])) {
                $model->vulAutoRepairConfigList = [];
                $n1 = 0;
                foreach ($map['VulAutoRepairConfigList'] as $item1) {
                    $model->vulAutoRepairConfigList[$n1] = vulAutoRepairConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
