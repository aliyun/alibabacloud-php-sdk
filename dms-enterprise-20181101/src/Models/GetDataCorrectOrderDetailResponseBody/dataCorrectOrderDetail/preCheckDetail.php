<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail\taskCheckDO;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskCheckDO) {
            $res['TaskCheckDO'] = [];
            if (null !== $this->taskCheckDO && \is_array($this->taskCheckDO)) {
                $n = 0;
                foreach ($this->taskCheckDO as $item) {
                    $res['TaskCheckDO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskCheckDO'])) {
            if (!empty($map['TaskCheckDO'])) {
                $model->taskCheckDO = [];
                $n                  = 0;
                foreach ($map['TaskCheckDO'] as $item) {
                    $model->taskCheckDO[$n++] = null !== $item ? taskCheckDO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
