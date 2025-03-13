<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchGetTrainTaskShrinkRequest extends Model
{
    /**
     * @example 1524004782431111
     *
     * @var string
     */
    public $aliyunMainId;

    /**
     * @var string
     */
    public $taskIdListShrink;
    protected $_name = [
        'aliyunMainId'     => 'aliyunMainId',
        'taskIdListShrink' => 'taskIdList',
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
        if (null !== $this->taskIdListShrink) {
            $res['taskIdList'] = $this->taskIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetTrainTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunMainId'])) {
            $model->aliyunMainId = $map['aliyunMainId'];
        }
        if (isset($map['taskIdList'])) {
            $model->taskIdListShrink = $map['taskIdList'];
        }

        return $model;
    }
}
