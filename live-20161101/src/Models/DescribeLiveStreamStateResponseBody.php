<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamStateResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example CE6CD79D-0A98-1F22-A15F-FADA74DF2729
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the stream. Valid values:
     *
     *   online: The stream is being ingested.
     *   offline: The stream is offline. This may be caused by failed or completed stream ingest. For the specific reason, check the stream ingest callback. This operation does not provide detailed information.
     *
     * @example online
     *
     * @var string
     */
    public $streamState;

    /**
     * @description The mode of the stream. Valid values:
     *
     *   push: stream ingest
     *   pull: triggered stream pulling
     *
     * @example push
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'requestId' => 'RequestId',
        'streamState' => 'StreamState',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamState) {
            $res['StreamState'] = $this->streamState;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamStateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamState'])) {
            $model->streamState = $map['StreamState'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
