<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayConvertStatusResponseBody\convertSteps;
use AlibabaCloud\Tea\Model;

class GetNatGatewayConvertStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $dstNatType;

    /**
     * @var convertSteps[]
     */
    public $convertSteps;

    /**
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'dstNatType'   => 'DstNatType',
        'convertSteps' => 'ConvertSteps',
        'natGatewayId' => 'NatGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dstNatType) {
            $res['DstNatType'] = $this->dstNatType;
        }
        if (null !== $this->convertSteps) {
            $res['ConvertSteps'] = [];
            if (null !== $this->convertSteps && \is_array($this->convertSteps)) {
                $n = 0;
                foreach ($this->convertSteps as $item) {
                    $res['ConvertSteps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNatGatewayConvertStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DstNatType'])) {
            $model->dstNatType = $map['DstNatType'];
        }
        if (isset($map['ConvertSteps'])) {
            if (!empty($map['ConvertSteps'])) {
                $model->convertSteps = [];
                $n                   = 0;
                foreach ($map['ConvertSteps'] as $item) {
                    $model->convertSteps[$n++] = null !== $item ? convertSteps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
