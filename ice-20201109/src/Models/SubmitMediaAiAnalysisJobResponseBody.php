<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaAiAnalysisJobResponseBody extends Model
{
    /**
     * @example ******b48fb04483915d4f2cd8******
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description Id of the request
     *
     * @example ****63E8B7C7-4812-46AD-0FA56029AC86****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaId'   => 'MediaId',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaAiAnalysisJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
