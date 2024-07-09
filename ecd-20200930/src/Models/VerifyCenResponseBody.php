<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenResponseBody\routeEntries;
use AlibabaCloud\Tea\Model;

class VerifyCenResponseBody extends Model
{
    /**
     * @description The recommended IPv4 CIDR blocks. Three CIDR blocks are randomly recommended. This parameter is returned when the `Status` value is `Conflict`.
     *
     * @var string[]
     */
    public $cidrBlocks;

    /**
     * @description The ID of the request.
     *
     * @example 0AF9D857-AE96-53D6-B317-5DD665EC4EC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The routes provided by the CEN instance.
     *
     * @var routeEntries[]
     */
    public $routeEntries;

    /**
     * @description The check result of CIDR block conflict.
     *
     * Valid values:
     *
     *   InvalidCen.CenUidInvalid: The Alibaba Cloud account is invalid or the Alibaba Cloud account does not have the permission to access Elastic Desktop Service.
     *   VerifyCode.InvalidTokenCode: The verification code is invalid.
     *   VerifyCode.ReachTokenRetryTime: The maximum number of times for entering a verification code reaches the limit.
     *   Conflict: A CIDR block conflict exists. If the verification result of at least one route is Conflict, Conflict is returned for this parameter.
     *   Access: The verification is passed. If the verification result for all routes is Access, Access is returned for this parameter.
     *   InvalidCen.ParameterCenInstanceId: The Alibaba Cloud account does not own the CEN instance.
     *
     * @example Access
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cidrBlocks'   => 'CidrBlocks',
        'requestId'    => 'RequestId',
        'routeEntries' => 'RouteEntries',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlocks) {
            $res['CidrBlocks'] = $this->cidrBlocks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeEntries) {
            $res['RouteEntries'] = [];
            if (null !== $this->routeEntries && \is_array($this->routeEntries)) {
                $n = 0;
                foreach ($this->routeEntries as $item) {
                    $res['RouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlocks'])) {
            if (!empty($map['CidrBlocks'])) {
                $model->cidrBlocks = $map['CidrBlocks'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteEntries'])) {
            if (!empty($map['RouteEntries'])) {
                $model->routeEntries = [];
                $n                   = 0;
                foreach ($map['RouteEntries'] as $item) {
                    $model->routeEntries[$n++] = null !== $item ? routeEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
