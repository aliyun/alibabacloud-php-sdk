<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildTaskId) {
            $res['BuildTaskId'] = $this->buildTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskErrorLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTaskId'])) {
            $model->buildTaskId = $map['BuildTaskId'];
        }

        return $model;
    }
}
