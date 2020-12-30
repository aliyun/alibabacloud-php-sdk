<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitWorkflowJobRequest extends Model
{
    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'workflowId' => 'WorkflowId',
        'mediaId'    => 'MediaId',
        'fileUrl'    => 'FileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitWorkflowJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
