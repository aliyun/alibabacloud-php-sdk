<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTranscodeDataResponse\transcodeDataInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainTranscodeDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeDataInfos
     */
    public $transcodeDataInfos;
    protected $_name = [
        'requestId'          => 'RequestId',
        'transcodeDataInfos' => 'TranscodeDataInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeDataInfos', $this->transcodeDataInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transcodeDataInfos) {
            $res['TranscodeDataInfos'] = null !== $this->transcodeDataInfos ? $this->transcodeDataInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainTranscodeDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeDataInfos'])) {
            $model->transcodeDataInfos = transcodeDataInfos::fromMap($map['TranscodeDataInfos']);
        }

        return $model;
    }
}
