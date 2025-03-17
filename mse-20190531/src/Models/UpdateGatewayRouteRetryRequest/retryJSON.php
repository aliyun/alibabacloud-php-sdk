<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRetryRequest;

use AlibabaCloud\Tea\Model;

class retryJSON extends Model
{
    /**
     * @description The number of retries.
     *
     * @example 2
     *
     * @var int
     */
    public $attempts;

    /**
     * @description The HTTP status codes.
     *
     * @var string[]
     */
    public $httpCodes;

    /**
     * @description The retry conditions.
     *
     * @var string[]
     */
    public $retryOn;

    /**
     * @description The status of the policy.
     *
     * @example off
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'attempts' => 'Attempts',
        'httpCodes' => 'HttpCodes',
        'retryOn' => 'RetryOn',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['Attempts'] = $this->attempts;
        }
        if (null !== $this->httpCodes) {
            $res['HttpCodes'] = $this->httpCodes;
        }
        if (null !== $this->retryOn) {
            $res['RetryOn'] = $this->retryOn;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryJSON
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attempts'])) {
            $model->attempts = $map['Attempts'];
        }
        if (isset($map['HttpCodes'])) {
            if (!empty($map['HttpCodes'])) {
                $model->httpCodes = $map['HttpCodes'];
            }
        }
        if (isset($map['RetryOn'])) {
            if (!empty($map['RetryOn'])) {
                $model->retryOn = $map['RetryOn'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
