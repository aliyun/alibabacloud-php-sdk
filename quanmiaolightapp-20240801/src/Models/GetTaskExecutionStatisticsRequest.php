<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class GetTaskExecutionStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $taskCode;
    protected $_name = [
        'taskCode' => 'taskCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskCode) {
            $res['taskCode'] = $this->taskCode;
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
        if (isset($map['taskCode'])) {
            $model->taskCode = $map['taskCode'];
        }

        return $model;
    }
}
