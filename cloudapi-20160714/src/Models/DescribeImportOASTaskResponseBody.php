<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\apiResults;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\modelResults;

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
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->apiResults) {
            $this->apiResults->validate();
        }
        if (null !== $this->modelResults) {
            $this->modelResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiResults) {
            $res['ApiResults'] = null !== $this->apiResults ? $this->apiResults->toArray($noStream) : $this->apiResults;
        }

        if (null !== $this->modelResults) {
            $res['ModelResults'] = null !== $this->modelResults ? $this->modelResults->toArray($noStream) : $this->modelResults;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
