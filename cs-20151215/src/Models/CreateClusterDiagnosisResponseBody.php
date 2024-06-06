<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterDiagnosisResponseBody extends Model
{
    /**
     * @example c5cdf7e3938bc4f8eb0e44b21a80f****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 6f719f23098240818eb26fe3a37d****
     *
     * @var string
     */
    public $diagnosisId;

    /**
     * @example 687C5BAA-D103-4993-884B-C35E4314****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId'   => 'cluster_id',
        'diagnosisId' => 'diagnosis_id',
        'requestId'   => 'request_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->diagnosisId) {
            $res['diagnosis_id'] = $this->diagnosisId;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterDiagnosisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['diagnosis_id'])) {
            $model->diagnosisId = $map['diagnosis_id'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        return $model;
    }
}
