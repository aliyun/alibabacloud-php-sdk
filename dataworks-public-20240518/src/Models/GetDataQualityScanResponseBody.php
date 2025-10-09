<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanResponseBody\dataQualityScan;

class GetDataQualityScanResponseBody extends Model
{
    /**
     * @var dataQualityScan
     */
    public $dataQualityScan;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityScan' => 'DataQualityScan',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataQualityScan) {
            $this->dataQualityScan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityScan) {
            $res['DataQualityScan'] = null !== $this->dataQualityScan ? $this->dataQualityScan->toArray($noStream) : $this->dataQualityScan;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DataQualityScan'])) {
            $model->dataQualityScan = dataQualityScan::fromMap($map['DataQualityScan']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
