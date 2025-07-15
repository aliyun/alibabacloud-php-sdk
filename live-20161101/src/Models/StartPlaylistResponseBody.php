<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo;
use AlibabaCloud\Tea\Model;

class StartPlaylistResponseBody extends Model
{
    /**
     * @description The ID of the episode list. You can use the ID as a request parameter in the API operation that is used to stop playing the episode list.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $programId;

    /**
     * @description The request ID.
     *
     * @example 5c6a2a0d-f228-4a64-af62-20e91b96****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the live stream.
     *
     * @var streamInfo
     */
    public $streamInfo;
    protected $_name = [
        'programId' => 'ProgramId',
        'requestId' => 'RequestId',
        'streamInfo' => 'StreamInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamInfo) {
            $res['StreamInfo'] = null !== $this->streamInfo ? $this->streamInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartPlaylistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamInfo'])) {
            $model->streamInfo = streamInfo::fromMap($map['StreamInfo']);
        }

        return $model;
    }
}
