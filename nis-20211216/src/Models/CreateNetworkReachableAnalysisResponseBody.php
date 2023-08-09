<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkReachableAnalysisResponseBody extends Model
{
    /**
     * @description The ID of the task for analyzing network reachability.
     *
     * @example nra-2fede05617494417****
     *
     * @var string
     */
    public $networkReachableAnalysisId;

    /**
     * @description The request ID.
     *
     * @example A7F0D6EC-E19E-58AC-AC9F-08036763960F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkReachableAnalysisId' => 'NetworkReachableAnalysisId',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateNetworkReachableAnalysisResponseBody
     */
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
