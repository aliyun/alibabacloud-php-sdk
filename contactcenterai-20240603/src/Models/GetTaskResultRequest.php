<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Tea\Model;

class GetTaskResultRequest extends Model
{
    /**
     * @var string[]
     */
    public $requiredFieldList;

    /**
     * @example 20240905-********-93E9-5D45-B4EF-045743A34071
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requiredFieldList' => 'requiredFieldList',
        'taskId'            => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requiredFieldList) {
            $res['requiredFieldList'] = $this->requiredFieldList;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requiredFieldList'])) {
            if (!empty($map['requiredFieldList'])) {
                $model->requiredFieldList = $map['requiredFieldList'];
            }
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
