<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetNatTopNResponseBody\natGatewayTopN;

class GetNatTopNResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isTopNOpen;

    /**
     * @var natGatewayTopN[]
     */
    public $natGatewayTopN;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isTopNOpen' => 'IsTopNOpen',
        'natGatewayTopN' => 'NatGatewayTopN',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->natGatewayTopN)) {
            Model::validateArray($this->natGatewayTopN);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isTopNOpen) {
            $res['IsTopNOpen'] = $this->isTopNOpen;
        }

        if (null !== $this->natGatewayTopN) {
            if (\is_array($this->natGatewayTopN)) {
                $res['NatGatewayTopN'] = [];
                $n1 = 0;
                foreach ($this->natGatewayTopN as $item1) {
                    $res['NatGatewayTopN'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['IsTopNOpen'])) {
            $model->isTopNOpen = $map['IsTopNOpen'];
        }

        if (isset($map['NatGatewayTopN'])) {
            if (!empty($map['NatGatewayTopN'])) {
                $model->natGatewayTopN = [];
                $n1 = 0;
                foreach ($map['NatGatewayTopN'] as $item1) {
                    $model->natGatewayTopN[$n1++] = natGatewayTopN::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
