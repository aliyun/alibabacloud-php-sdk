<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTopicSelectionPerspectiveAnalysisTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTopicSelectionPerspectiveAnalysisTaskResponseBody\data\customViewPointsResult;

class data extends Model
{
    /**
     * @var customViewPointsResult
     */
    public $customViewPointsResult;
    /**
     * @var string
     */
    public $errorMessage;
    /**
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
        if (null !== $this->customViewPointsResult) {
            $this->customViewPointsResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customViewPointsResult) {
            $res['CustomViewPointsResult'] = null !== $this->customViewPointsResult ? $this->customViewPointsResult->toArray($noStream) : $this->customViewPointsResult;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
