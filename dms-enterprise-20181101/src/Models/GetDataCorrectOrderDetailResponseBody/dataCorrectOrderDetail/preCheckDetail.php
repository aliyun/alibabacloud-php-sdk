<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail\taskCheckDO;

class preCheckDetail extends Model
{
    /**
     * @var taskCheckDO[]
     */
    public $taskCheckDO;
    protected $_name = [
        'taskCheckDO' => 'TaskCheckDO',
    ];

    public function validate()
    {
        if (\is_array($this->taskCheckDO)) {
            Model::validateArray($this->taskCheckDO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskCheckDO) {
            if (\is_array($this->taskCheckDO)) {
                $res['TaskCheckDO'] = [];
                $n1                 = 0;
                foreach ($this->taskCheckDO as $item1) {
                    $res['TaskCheckDO'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskCheckDO'])) {
            if (!empty($map['TaskCheckDO'])) {
                $model->taskCheckDO = [];
                $n1                 = 0;
                foreach ($map['TaskCheckDO'] as $item1) {
                    $model->taskCheckDO[$n1++] = taskCheckDO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
