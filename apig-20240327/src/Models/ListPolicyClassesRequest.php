<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListPolicyClassesRequest extends Model
{
    /**
     * @var string
     */
    public $attachResourceId;

    /**
     * @description Types of attachment points supported by the policy.
     *
     * - HttpApi: HttpApi.
     * - Operation: Operation of HttpApi.
     * - GatewayRoute: Gateway route.
     * - GatewayService: Gateway service.
     * - GatewayServicePort: Gateway service port.
     * - Domain: Gateway domain.
     * - Gateway: Gateway.
     *
     * @example Operation
     *
     * @var string
     */
    public $attachResourceType;

    /**
     * @description Direction of the policy.
     * - Outbound: OutBound.
     * - Inbound: InBound.
     * - Both directions: Both.
     *
     * @example InBound
     *
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @description Page number, default is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Type of the policy template.
     *
     * @example FlowControl
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'attachResourceId' => 'attachResourceId',
        'attachResourceType' => 'attachResourceType',
        'direction' => 'direction',
        'gatewayId' => 'gatewayId',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachResourceId) {
            $res['attachResourceId'] = $this->attachResourceId;
        }
        if (null !== $this->attachResourceType) {
            $res['attachResourceType'] = $this->attachResourceType;
        }
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyClassesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attachResourceId'])) {
            $model->attachResourceId = $map['attachResourceId'];
        }
        if (isset($map['attachResourceType'])) {
            $model->attachResourceType = $map['attachResourceType'];
        }
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
