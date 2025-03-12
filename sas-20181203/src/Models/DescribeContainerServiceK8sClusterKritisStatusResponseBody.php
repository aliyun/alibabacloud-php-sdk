<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClusterKritisStatusResponseBody\kritisStatus;
use AlibabaCloud\Tea\Model;

class DescribeContainerServiceK8sClusterKritisStatusResponseBody extends Model
{
    /**
     * @description The Kritis status of the ACK cluster.
     *
     * @var kritisStatus
     */
    public $kritisStatus;

    /**
     * @description The request ID.
     *
     * @example BE120DAB-F4E7-4C53-ADC3-A97578AB****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kritisStatus' => 'KritisStatus',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kritisStatus) {
            $res['KritisStatus'] = null !== $this->kritisStatus ? $this->kritisStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerServiceK8sClusterKritisStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KritisStatus'])) {
            $model->kritisStatus = kritisStatus::fromMap($map['KritisStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
