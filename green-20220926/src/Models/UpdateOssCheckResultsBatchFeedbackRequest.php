<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateOssCheckResultsBatchFeedbackRequest extends Model
{
    /**
     * @example misreport
     *
     * @var string
     */
    public $feedback;

    /**
     * @example []
     *
     * @var string
     */
    public $items;

    /**
     * @example P_XHDUS
     *
     * @var string
     */
    public $parentTaskId;
    protected $_name = [
        'feedback' => 'Feedback',
        'items' => 'Items',
        'parentTaskId' => 'ParentTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOssCheckResultsBatchFeedbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['Items'])) {
            $model->items = $map['Items'];
        }
        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }

        return $model;
    }
}
