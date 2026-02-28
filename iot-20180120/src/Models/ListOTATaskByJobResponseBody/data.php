<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobResponseBody\data\simpleOTATaskInfo;

class data extends Model
{
    /**
     * @var simpleOTATaskInfo[]
     */
    public $simpleOTATaskInfo;
    protected $_name = [
        'simpleOTATaskInfo' => 'SimpleOTATaskInfo',
    ];

    public function validate()
    {
        if (\is_array($this->simpleOTATaskInfo)) {
            Model::validateArray($this->simpleOTATaskInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->simpleOTATaskInfo) {
            if (\is_array($this->simpleOTATaskInfo)) {
                $res['SimpleOTATaskInfo'] = [];
                $n1 = 0;
                foreach ($this->simpleOTATaskInfo as $item1) {
                    $res['SimpleOTATaskInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SimpleOTATaskInfo'])) {
            if (!empty($map['SimpleOTATaskInfo'])) {
                $model->simpleOTATaskInfo = [];
                $n1 = 0;
                foreach ($map['SimpleOTATaskInfo'] as $item1) {
                    $model->simpleOTATaskInfo[$n1] = simpleOTATaskInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
