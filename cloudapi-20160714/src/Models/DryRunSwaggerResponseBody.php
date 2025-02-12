<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\failed;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\modelFailed;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\modelSuccess;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\success;

class DryRunSwaggerResponseBody extends Model
{
    /**
     * @var failed
     */
    public $failed;
    /**
     * @var string
     */
    public $globalCondition;
    /**
     * @var modelFailed
     */
    public $modelFailed;
    /**
     * @var modelSuccess
     */
    public $modelSuccess;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var success
     */
    public $success;
    protected $_name = [
        'failed'          => 'Failed',
        'globalCondition' => 'GlobalCondition',
        'modelFailed'     => 'ModelFailed',
        'modelSuccess'    => 'ModelSuccess',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->failed) {
            $this->failed->validate();
        }
        if (null !== $this->modelFailed) {
            $this->modelFailed->validate();
        }
        if (null !== $this->modelSuccess) {
            $this->modelSuccess->validate();
        }
        if (null !== $this->success) {
            $this->success->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = null !== $this->failed ? $this->failed->toArray($noStream) : $this->failed;
        }

        if (null !== $this->globalCondition) {
            $res['GlobalCondition'] = $this->globalCondition;
        }

        if (null !== $this->modelFailed) {
            $res['ModelFailed'] = null !== $this->modelFailed ? $this->modelFailed->toArray($noStream) : $this->modelFailed;
        }

        if (null !== $this->modelSuccess) {
            $res['ModelSuccess'] = null !== $this->modelSuccess ? $this->modelSuccess->toArray($noStream) : $this->modelSuccess;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = null !== $this->success ? $this->success->toArray($noStream) : $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failed'])) {
            $model->failed = failed::fromMap($map['Failed']);
        }

        if (isset($map['GlobalCondition'])) {
            $model->globalCondition = $map['GlobalCondition'];
        }

        if (isset($map['ModelFailed'])) {
            $model->modelFailed = modelFailed::fromMap($map['ModelFailed']);
        }

        if (isset($map['ModelSuccess'])) {
            $model->modelSuccess = modelSuccess::fromMap($map['ModelSuccess']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = success::fromMap($map['Success']);
        }

        return $model;
    }
}
