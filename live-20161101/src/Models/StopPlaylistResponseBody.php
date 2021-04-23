<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StopPlaylistResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $programId;
    protected $_name = [
        'requestId' => 'RequestId',
        'programId' => 'ProgramId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopPlaylistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }

        return $model;
    }
}
