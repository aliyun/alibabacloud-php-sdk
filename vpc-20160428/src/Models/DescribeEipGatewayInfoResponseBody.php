<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody\eipInfos;
use AlibabaCloud\Tea\Model;

class DescribeEipGatewayInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var eipInfos
     */
    public $eipInfos;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'eipInfos'  => 'EipInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->eipInfos) {
            $res['EipInfos'] = null !== $this->eipInfos ? $this->eipInfos->toMap() : null;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EipInfos'])) {
            $model->eipInfos = eipInfos::fromMap($map['EipInfos']);
        }

        return $model;
    }
}
