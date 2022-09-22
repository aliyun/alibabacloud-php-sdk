<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultResponseBody\audioResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultResponseBody\coverResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultResponseBody\descResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultResponseBody\mediaAuditResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultResponseBody\titleResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultResponseBody\videoResult;
use AlibabaCloud\Tea\Model;

class GetMediaAuditResultResponseBody extends Model
{
    /**
     * @var audioResult
     */
    public $audioResult;

    /**
     * @var coverResult
     */
    public $coverResult;

    /**
     * @var descResult
     */
    public $descResult;

    /**
     * @var mediaAuditResult
     */
    public $mediaAuditResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var titleResult
     */
    public $titleResult;

    /**
     * @var videoResult
     */
    public $videoResult;
    protected $_name = [
        'audioResult'      => 'AudioResult',
        'coverResult'      => 'CoverResult',
        'descResult'       => 'DescResult',
        'mediaAuditResult' => 'MediaAuditResult',
        'requestId'        => 'RequestId',
        'titleResult'      => 'TitleResult',
        'videoResult'      => 'VideoResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioResult) {
            $res['AudioResult'] = null !== $this->audioResult ? $this->audioResult->toMap() : null;
        }
        if (null !== $this->coverResult) {
            $res['CoverResult'] = null !== $this->coverResult ? $this->coverResult->toMap() : null;
        }
        if (null !== $this->descResult) {
            $res['DescResult'] = null !== $this->descResult ? $this->descResult->toMap() : null;
        }
        if (null !== $this->mediaAuditResult) {
            $res['MediaAuditResult'] = null !== $this->mediaAuditResult ? $this->mediaAuditResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->titleResult) {
            $res['TitleResult'] = null !== $this->titleResult ? $this->titleResult->toMap() : null;
        }
        if (null !== $this->videoResult) {
            $res['VideoResult'] = null !== $this->videoResult ? $this->videoResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaAuditResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioResult'])) {
            $model->audioResult = audioResult::fromMap($map['AudioResult']);
        }
        if (isset($map['CoverResult'])) {
            $model->coverResult = coverResult::fromMap($map['CoverResult']);
        }
        if (isset($map['DescResult'])) {
            $model->descResult = descResult::fromMap($map['DescResult']);
        }
        if (isset($map['MediaAuditResult'])) {
            $model->mediaAuditResult = mediaAuditResult::fromMap($map['MediaAuditResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TitleResult'])) {
            $model->titleResult = titleResult::fromMap($map['TitleResult']);
        }
        if (isset($map['VideoResult'])) {
            $model->videoResult = videoResult::fromMap($map['VideoResult']);
        }

        return $model;
    }
}
