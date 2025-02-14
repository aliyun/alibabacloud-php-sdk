<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckRequest\operationTaskInstances;

class ListOperationCheckRequest extends Model
{
    /**
     * @var int
     */
    public $checkId;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var operationTaskInstances[]
     */
    public $operationTaskInstances;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId'                => 'CheckId',
        'endTime'                => 'EndTime',
        'lang'                   => 'Lang',
        'operationTaskInstances' => 'OperationTaskInstances',
        'startTime'              => 'StartTime',
        'type'                   => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->operationTaskInstances)) {
            Model::validateArray($this->operationTaskInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->operationTaskInstances) {
            if (\is_array($this->operationTaskInstances)) {
                $res['OperationTaskInstances'] = [];
                $n1                            = 0;
                foreach ($this->operationTaskInstances as $item1) {
                    $res['OperationTaskInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['OperationTaskInstances'])) {
            if (!empty($map['OperationTaskInstances'])) {
                $model->operationTaskInstances = [];
                $n1                            = 0;
                foreach ($map['OperationTaskInstances'] as $item1) {
                    $model->operationTaskInstances[$n1++] = operationTaskInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
