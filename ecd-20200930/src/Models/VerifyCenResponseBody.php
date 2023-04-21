<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenResponseBody\routeEntries;
use AlibabaCloud\Tea\Model;

class VerifyCenResponseBody extends Model
{
    /**
     * @description The three random IPv4 CIDR blocks that are recommended. If the returned value of the Status parameter is Conflict, this parameter is returned.
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
     * @description The information about the routes of the CEN instance.
     *
     * @var routeEntries[]
     */
    public $routeEntries;

    /**
     * @description The verification result. Valid values:
     *
     *   Access: The route verification succeeds. If the verification result for all routes succeeds, Access is returned for this parameter.
     *   Conflict: A CIDR block conflict exists. If the verification result of at least one route is Conflict, Conflict is returned for this parameter.
     *   InvalidCen.ParameterCenInstanceId: The ID of the CEN instance and the ID of the Alibaba Cloud account are invalid. The CEN instance does not belong to the Alibaba Cloud account.
     *   InvalidCen.CenUidInvalid: The ID of the Alibaba Cloud account is invalid or the Alibaba Cloud account is not granted the required permissions to access Elastic Desktop Service (EDS).
     *   VerifyCode.InvalidTokenCode: The verification code is invalid.
     *   VerifyCode.ReachTokenRetryTime: The retries of entering the verification code reaches the upper limit.
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
