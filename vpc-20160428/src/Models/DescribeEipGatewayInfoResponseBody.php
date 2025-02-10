<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody\eipInfos;

class DescribeEipGatewayInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var eipInfos
     */
    public $eipInfos;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'eipInfos'  => 'EipInfos',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->eipInfos) {
            $this->eipInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->eipInfos) {
            $res['EipInfos'] = null !== $this->eipInfos ? $this->eipInfos->toArray($noStream) : $this->eipInfos;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
