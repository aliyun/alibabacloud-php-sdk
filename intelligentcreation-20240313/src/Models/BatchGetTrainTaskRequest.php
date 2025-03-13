<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchGetTrainTaskRequest extends Model
{
    /**
     * @example 1524004782431111
     *
     * @var string
     */
    public $aliyunMainId;

    /**
     * @var string[]
     */
    public $taskIdList;
    protected $_name = [
        'aliyunMainId' => 'aliyunMainId',
        'taskIdList'   => 'taskIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunMainId) {
            $res['aliyunMainId'] = $this->aliyunMainId;
        }
        if (null !== $this->taskIdList) {
            $res['taskIdList'] = $this->taskIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetTrainTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunMainId'])) {
            $model->aliyunMainId = $map['aliyunMainId'];
        }
        if (isset($map['taskIdList'])) {
            if (!empty($map['taskIdList'])) {
                $model->taskIdList = $map['taskIdList'];
            }
        }

        return $model;
    }
}
