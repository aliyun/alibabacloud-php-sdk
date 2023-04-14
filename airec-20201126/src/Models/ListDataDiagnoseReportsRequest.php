<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListDataDiagnoseReportsRequest extends Model
{
    /**
     * @var int
     */
    public $taskCreateTime;
    protected $_name = [
        'taskCreateTime' => 'taskCreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskCreateTime) {
            $res['taskCreateTime'] = $this->taskCreateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataDiagnoseReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskCreateTime'])) {
            $model->taskCreateTime = $map['taskCreateTime'];
        }

        return $model;
    }
}
