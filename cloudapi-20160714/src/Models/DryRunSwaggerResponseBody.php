<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\failed;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\modelFailed;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\modelSuccess;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\success;
use AlibabaCloud\Tea\Model;

class DryRunSwaggerResponseBody extends Model
{
    /**
     * @var string
     */
    public $globalCondition;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var success
     */
    public $success;

    /**
     * @var failed
     */
    public $failed;

    /**
     * @var modelFailed
     */
    public $modelFailed;

    /**
     * @var modelSuccess
     */
    public $modelSuccess;
    protected $_name = [
        'globalCondition' => 'GlobalCondition',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'failed'          => 'Failed',
        'modelFailed'     => 'ModelFailed',
        'modelSuccess'    => 'ModelSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalCondition) {
            $res['GlobalCondition'] = $this->globalCondition;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = null !== $this->success ? $this->success->toMap() : null;
        }
        if (null !== $this->failed) {
            $res['Failed'] = null !== $this->failed ? $this->failed->toMap() : null;
        }
        if (null !== $this->modelFailed) {
            $res['ModelFailed'] = null !== $this->modelFailed ? $this->modelFailed->toMap() : null;
        }
        if (null !== $this->modelSuccess) {
            $res['ModelSuccess'] = null !== $this->modelSuccess ? $this->modelSuccess->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DryRunSwaggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalCondition'])) {
            $model->globalCondition = $map['GlobalCondition'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = success::fromMap($map['Success']);
        }
        if (isset($map['Failed'])) {
            $model->failed = failed::fromMap($map['Failed']);
        }
        if (isset($map['ModelFailed'])) {
            $model->modelFailed = modelFailed::fromMap($map['ModelFailed']);
        }
        if (isset($map['ModelSuccess'])) {
            $model->modelSuccess = modelSuccess::fromMap($map['ModelSuccess']);
        }

        return $model;
    }
}
