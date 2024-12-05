<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Tea\Model;

class GetTaskResultShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $requiredFieldListShrink;

    /**
     * @example 20240905-********-93E9-5D45-B4EF-045743A34071
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requiredFieldListShrink' => 'requiredFieldList',
        'taskId'                  => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requiredFieldListShrink) {
            $res['requiredFieldList'] = $this->requiredFieldListShrink;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskResultShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requiredFieldList'])) {
            $model->requiredFieldListShrink = $map['requiredFieldList'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
