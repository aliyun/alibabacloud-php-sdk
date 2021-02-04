<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetSmartHandleJobRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $withAiResult;
    protected $_name = [
        'jobId'        => 'JobId',
        'withAiResult' => 'WithAiResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->withAiResult) {
            $res['WithAiResult'] = $this->withAiResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmartHandleJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['WithAiResult'])) {
            $model->withAiResult = $map['WithAiResult'];
        }

        return $model;
    }
}
