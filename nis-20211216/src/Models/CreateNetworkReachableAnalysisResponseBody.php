<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class CreateNetworkReachableAnalysisResponseBody extends Model
{
    /**
     * @var string
     */
    public $networkReachableAnalysisId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkReachableAnalysisId' => 'NetworkReachableAnalysisId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkReachableAnalysisId) {
            $res['NetworkReachableAnalysisId'] = $this->networkReachableAnalysisId;
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
        if (isset($map['NetworkReachableAnalysisId'])) {
            $model->networkReachableAnalysisId = $map['NetworkReachableAnalysisId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
