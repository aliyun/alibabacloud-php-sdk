<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTopicSelectionPerspectiveAnalysisTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTopicSelectionPerspectiveAnalysisTaskResponseBody\data\customViewPointsResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var customViewPointsResult
     */
    public $customViewPointsResult;

    /**
     * @example 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example FAILED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'customViewPointsResult' => 'CustomViewPointsResult',
        'errorMessage'           => 'ErrorMessage',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customViewPointsResult) {
            $res['CustomViewPointsResult'] = null !== $this->customViewPointsResult ? $this->customViewPointsResult->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CustomViewPointsResult'])) {
            $model->customViewPointsResult = customViewPointsResult::fromMap($map['CustomViewPointsResult']);
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
