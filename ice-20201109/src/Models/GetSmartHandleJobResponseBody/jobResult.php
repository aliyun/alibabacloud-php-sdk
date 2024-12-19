<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody;

use AlibabaCloud\Tea\Model;

class jobResult extends Model
{
    /**
     * @description The AI analysis result.
     *
     * @example Intelligent segmentation or tagging information
     *
     * @var string
     */
    public $aiResult;

    /**
     * @description The ID of the media asset.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaUrl;

    /**
     * @description The token usage. This parameter is returned only for keyword-based text generation jobs.
     *
     * @example {"total_tokens":100}
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'aiResult' => 'AiResult',
        'mediaId'  => 'MediaId',
        'mediaUrl' => 'MediaUrl',
        'usage'    => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiResult) {
            $res['AiResult'] = $this->aiResult;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiResult'])) {
            $model->aiResult = $map['AiResult'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
