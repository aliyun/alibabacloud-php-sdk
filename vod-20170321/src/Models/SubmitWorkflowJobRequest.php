<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitWorkflowJobRequest extends Model
{
    /**
     * @description The ID of the media file. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, view the ID of the audio or video file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of the VideoId parameter when you call the [CreateUploadVideo](~~55407~~) operation to upload media files.
     *   Obtain the value of the VideoId parameter when you call the [SearchMedia](~~86044~~) operation after you upload media files.
     *
     * @example 058b39e75269da42b08f00459****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The ID of the workflow. To view the ID of the workflow, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Configuration Management** > **Media Processing** > **Workflows**.
     *
     * @example 34d577eade633860bdf1237****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'mediaId'    => 'MediaId',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
