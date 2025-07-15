<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody\eipInfos;
use AlibabaCloud\Tea\Model;

class DescribeEipGatewayInfoResponseBody extends Model
{
    /**
     * @description The status code of the operation.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The detailed information about the EIP.
     *
     * @var eipInfos
     */
    public $eipInfos;

    /**
     * @description The result of the operation.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example C0FD0EED-F90D-4479-803D-DD62335357E5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'eipInfos' => 'EipInfos',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->eipInfos) {
            $res['EipInfos'] = null !== $this->eipInfos ? $this->eipInfos->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEipGatewayInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EipInfos'])) {
            $model->eipInfos = eipInfos::fromMap($map['EipInfos']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
