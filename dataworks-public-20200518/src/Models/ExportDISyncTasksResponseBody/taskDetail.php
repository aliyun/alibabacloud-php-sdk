<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDISyncTasksResponseBody;

use AlibabaCloud\Tea\Model;

class taskDetail extends Model
{
    /**
     * @var string
     */
    public $realTimeSolution;
    protected $_name = [
        'realTimeSolution' => 'RealTimeSolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realTimeSolution) {
            $res['RealTimeSolution'] = $this->realTimeSolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RealTimeSolution'])) {
            $model->realTimeSolution = $map['RealTimeSolution'];
        }

        return $model;
    }
}
