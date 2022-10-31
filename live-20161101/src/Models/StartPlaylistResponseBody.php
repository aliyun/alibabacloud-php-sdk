<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo;
use AlibabaCloud\Tea\Model;

class StartPlaylistResponseBody extends Model
{
    /**
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var streamInfo
     */
    public $streamInfo;
    protected $_name = [
        'programId'  => 'ProgramId',
        'requestId'  => 'RequestId',
        'streamInfo' => 'StreamInfo',
    ];

    public function validate()
    {
    }

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
