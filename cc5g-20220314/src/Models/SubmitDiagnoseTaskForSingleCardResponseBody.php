<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class SubmitDiagnoseTaskForSingleCardResponseBody extends Model
{
    /**
     * @example diagnoseTask-bp2n6rgaj49qcs34jyzo8
     *
     * @var string
     */
    public $diagnoseTaskId;

    /**
     * @example 1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnoseTaskId' => 'DiagnoseTaskId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseTaskId) {
            $res['DiagnoseTaskId'] = $this->diagnoseTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDiagnoseTaskForSingleCardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseTaskId'])) {
            $model->diagnoseTaskId = $map['DiagnoseTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
