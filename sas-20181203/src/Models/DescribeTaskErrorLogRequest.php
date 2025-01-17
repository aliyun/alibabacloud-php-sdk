<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeTaskErrorLogRequest extends Model
{
    /**
     * @var string
     */
    public $buildTaskId;
    protected $_name = [
        'buildTaskId' => 'BuildTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildTaskId) {
            $res['BuildTaskId'] = $this->buildTaskId;
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
        if (isset($map['BuildTaskId'])) {
            $model->buildTaskId = $map['BuildTaskId'];
        }

        return $model;
    }
}
