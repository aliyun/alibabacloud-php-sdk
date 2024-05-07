<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetAsrResultRequest extends Model
{
    /**
     * @example B2AADC9E-2A58-5918-AE4E-FF59E19D7***
     *
     * @var string
     */
    public $asrTaskId;
    protected $_name = [
        'asrTaskId' => 'AsrTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrTaskId) {
            $res['AsrTaskId'] = $this->asrTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsrResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrTaskId'])) {
            $model->asrTaskId = $map['AsrTaskId'];
        }

        return $model;
    }
}
