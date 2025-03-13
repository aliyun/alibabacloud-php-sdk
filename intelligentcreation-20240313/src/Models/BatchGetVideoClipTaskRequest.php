<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchGetVideoClipTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $taskIdList;
    protected $_name = [
        'taskIdList' => 'taskIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskIdList) {
            $res['taskIdList'] = $this->taskIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetVideoClipTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskIdList'])) {
            if (!empty($map['taskIdList'])) {
                $model->taskIdList = $map['taskIdList'];
            }
        }

        return $model;
    }
}
