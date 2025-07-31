<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanRunResponseBody\dataQualityScanRun;
use AlibabaCloud\Tea\Model;

class GetDataQualityScanRunResponseBody extends Model
{
    /**
     * @var dataQualityScanRun
     */
    public $dataQualityScanRun;

    /**
     * @example 0bc14115****159376359
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityScanRun' => 'DataQualityScanRun',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityScanRun) {
            $res['DataQualityScanRun'] = null !== $this->dataQualityScanRun ? $this->dataQualityScanRun->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityScanRunResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityScanRun'])) {
            $model->dataQualityScanRun = dataQualityScanRun::fromMap($map['DataQualityScanRun']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
