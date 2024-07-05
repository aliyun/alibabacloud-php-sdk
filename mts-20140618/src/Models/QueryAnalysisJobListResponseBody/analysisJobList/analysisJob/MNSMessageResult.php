<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList\analysisJob;

use AlibabaCloud\Tea\Model;

class MNSMessageResult extends Model
{
    /**
     * @description The error code returned if the job failed. This parameter is not returned if the job was successful.
     *
     * @example InvalidParameter.ResourceNotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the job failed. This parameter is not returned if the job was successful.
     *
     * @example The resource operated \\"PipelineId\\" cannot be found
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the message returned if the job was successful. This parameter is not returned if the job failed.
     *
     * @example 3ca84a39a9024f19853b21be9cf9****
     *
     * @var string
     */
    public $messageId;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'messageId'    => 'MessageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MNSMessageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        return $model;
    }
}
