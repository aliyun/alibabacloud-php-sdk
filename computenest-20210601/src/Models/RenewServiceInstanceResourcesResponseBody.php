<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesResponseBody\failureDetails;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesResponseBody\renewalResult;
use AlibabaCloud\Tea\Model;

class RenewServiceInstanceResourcesResponseBody extends Model
{
    /**
     * @description Details of failed renewals.
     *
     * @var failureDetails[]
     */
    public $failureDetails;

    /**
     * @description Renewal result.
     *
     * @var renewalResult
     */
    public $renewalResult;

    /**
     * @description Request ID.
     *
     * @example 13FE89A5-C036-56BF-A0FF-A31C59819FD7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failureDetails' => 'FailureDetails',
        'renewalResult' => 'RenewalResult',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureDetails) {
            $res['FailureDetails'] = [];
            if (null !== $this->failureDetails && \is_array($this->failureDetails)) {
                $n = 0;
                foreach ($this->failureDetails as $item) {
                    $res['FailureDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->renewalResult) {
            $res['RenewalResult'] = null !== $this->renewalResult ? $this->renewalResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewServiceInstanceResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureDetails'])) {
            if (!empty($map['FailureDetails'])) {
                $model->failureDetails = [];
                $n = 0;
                foreach ($map['FailureDetails'] as $item) {
                    $model->failureDetails[$n++] = null !== $item ? failureDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RenewalResult'])) {
            $model->renewalResult = renewalResult::fromMap($map['RenewalResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
