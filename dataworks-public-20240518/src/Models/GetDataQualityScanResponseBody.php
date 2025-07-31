<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanResponseBody\dataQualityScan;
use AlibabaCloud\Tea\Model;

class GetDataQualityScanResponseBody extends Model
{
    /**
     * @var dataQualityScan
     */
    public $dataQualityScan;

    /**
     * @description Id of the request
     *
     * @example 204EAF68-CCE3-5112-8DA0-E7A60F02XXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityScan' => 'DataQualityScan',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityScan) {
            $res['DataQualityScan'] = null !== $this->dataQualityScan ? $this->dataQualityScan->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityScanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityScan'])) {
            $model->dataQualityScan = dataQualityScan::fromMap($map['DataQualityScan']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
