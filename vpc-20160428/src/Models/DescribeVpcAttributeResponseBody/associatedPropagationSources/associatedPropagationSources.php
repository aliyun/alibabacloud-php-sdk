<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedPropagationSources;

use AlibabaCloud\Tea\Model;

class associatedPropagationSources extends Model
{
    /**
     * @description Indicates whether to propagate the routes of the VPC.
     *
     * @example true
     *
     * @var bool
     */
    public $routePropagated;

    /**
     * @description The instance ID of the propagation source.
     *
     * @example cen-dc4vwznpwbobrl****
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The ID of the account to which the propagation source belongs.
     *
     * @example 153980532164****
     *
     * @var int
     */
    public $sourceOwnerId;

    /**
     * @description The type of the propagation source. Valid values:
     *
     * - **CEN**
     * - **VPN**
     * - **TR**
     * - **ECR**
     * @example CEN
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The status indicating whether the propagation source is attached to the VPC. Valid values:
     *
     * - **Attaching**
     * - **Attached**
     * - **Detaching**
     * @example Attaching
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'routePropagated'  => 'RoutePropagated',
        'sourceInstanceId' => 'SourceInstanceId',
        'sourceOwnerId'    => 'SourceOwnerId',
        'sourceType'       => 'SourceType',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routePropagated) {
            $res['RoutePropagated'] = $this->routePropagated;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceOwnerId) {
            $res['SourceOwnerId'] = $this->sourceOwnerId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedPropagationSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoutePropagated'])) {
            $model->routePropagated = $map['RoutePropagated'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceOwnerId'])) {
            $model->sourceOwnerId = $map['SourceOwnerId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
