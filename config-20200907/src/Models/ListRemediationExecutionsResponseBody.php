<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsResponseBody\remediationExecutionData;
use AlibabaCloud\Tea\Model;

class ListRemediationExecutionsResponseBody extends Model
{
    /**
     * @var remediationExecutionData
     */
    public $remediationExecutionData;

    /**
     * @example 13E67493-3165-529A-A961-BE9E4B11BA11
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediationExecutionData' => 'RemediationExecutionData',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationExecutionData) {
            $res['RemediationExecutionData'] = null !== $this->remediationExecutionData ? $this->remediationExecutionData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemediationExecutionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemediationExecutionData'])) {
            $model->remediationExecutionData = remediationExecutionData::fromMap($map['RemediationExecutionData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
