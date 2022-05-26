<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeMeshWorkloadVersionStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var WorkloadVersionsValue[]
     */
    public $workloadVersions;
    protected $_name = [
        'requestId'        => 'RequestId',
        'workloadVersions' => 'WorkloadVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workloadVersions) {
            $res['WorkloadVersions'] = [];
            if (null !== $this->workloadVersions && \is_array($this->workloadVersions)) {
                foreach ($this->workloadVersions as $key => $val) {
                    $res['WorkloadVersions'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeshWorkloadVersionStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WorkloadVersions'])) {
            $model->workloadVersions = $map['WorkloadVersions'];
        }

        return $model;
    }
}
