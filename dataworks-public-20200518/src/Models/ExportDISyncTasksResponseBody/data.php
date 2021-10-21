<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDISyncTasksResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $realTimeSolution;
    protected $_name = [
        'realTimeSolution' => 'realTimeSolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realTimeSolution) {
            $res['realTimeSolution'] = $this->realTimeSolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['realTimeSolution'])) {
            $model->realTimeSolution = $map['realTimeSolution'];
        }

        return $model;
    }
}
