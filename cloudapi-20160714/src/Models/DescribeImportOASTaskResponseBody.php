<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\apiResults;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\modelResults;
use AlibabaCloud\Tea\Model;

class DescribeImportOASTaskResponseBody extends Model
{
    /**
     * @var apiResults
     */
    public $apiResults;

    /**
     * @var modelResults
     */
    public $modelResults;

    /**
     * @example CE5722A6-AE78-4741-A9B0-6C817D360510
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Finished
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'apiResults'   => 'ApiResults',
        'modelResults' => 'ModelResults',
        'requestId'    => 'RequestId',
        'taskStatus'   => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiResults) {
            $res['ApiResults'] = null !== $this->apiResults ? $this->apiResults->toMap() : null;
        }
        if (null !== $this->modelResults) {
            $res['ModelResults'] = null !== $this->modelResults ? $this->modelResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImportOASTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiResults'])) {
            $model->apiResults = apiResults::fromMap($map['ApiResults']);
        }
        if (isset($map['ModelResults'])) {
            $model->modelResults = modelResults::fromMap($map['ModelResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
