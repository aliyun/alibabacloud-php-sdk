<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetIntegratedServiceStatusResponseBody extends Model
{
    /**
     * @description Indicates whether the product has been integrated. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The types of the integrated events. Separate multiple event types with commas (,). Valid values:
     *
     *   ConfigurationItemChangeNotification: resource change event
     *   NonCompliantNotification: non-compliance event
     *
     * @example NonCompliantNotification
     *
     * @var string
     */
    public $integratedTypes;

    /**
     * @description The request ID.
     *
     * @example 2E396C84-8D50-5F95-97FA-C0367181BA8A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'            => 'Data',
        'integratedTypes' => 'IntegratedTypes',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->integratedTypes) {
            $res['IntegratedTypes'] = $this->integratedTypes;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIntegratedServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['IntegratedTypes'])) {
            $model->integratedTypes = $map['IntegratedTypes'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
