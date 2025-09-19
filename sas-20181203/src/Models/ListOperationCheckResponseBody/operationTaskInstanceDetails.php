<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody\operationTaskInstanceDetails\repair;

class operationTaskInstanceDetails extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var repair[]
     */
    public $repair;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId' => 'CheckId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'repair' => 'Repair',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->repair)) {
            Model::validateArray($this->repair);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repair) {
            if (\is_array($this->repair)) {
                $res['Repair'] = [];
                $n1 = 0;
                foreach ($this->repair as $item1) {
                    $res['Repair'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Repair'])) {
            if (!empty($map['Repair'])) {
                $model->repair = [];
                $n1 = 0;
                foreach ($map['Repair'] as $item1) {
                    $model->repair[$n1] = repair::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
