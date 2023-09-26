<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody\failed;
use AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody\modelFailed;
use AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody\modelSuccess;
use AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody\success;
use AlibabaCloud\Tea\Model;

class ImportSwaggerResponseBody extends Model
{
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

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var success
     */
    public $success;
    protected $_name = [
        'failed'       => 'Failed',
        'modelFailed'  => 'ModelFailed',
        'modelSuccess' => 'ModelSuccess',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = null !== $this->failed ? $this->failed->toMap() : null;
        }
        if (null !== $this->modelFailed) {
            $res['ModelFailed'] = null !== $this->modelFailed ? $this->modelFailed->toMap() : null;
        }
        if (null !== $this->modelSuccess) {
            $res['ModelSuccess'] = null !== $this->modelSuccess ? $this->modelSuccess->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = null !== $this->success ? $this->success->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportSwaggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failed'])) {
            $model->failed = failed::fromMap($map['Failed']);
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
