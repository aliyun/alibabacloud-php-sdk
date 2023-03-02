<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\GetNatTopNResponseBody\natGatewayTopN;
use AlibabaCloud\Tea\Model;

class GetNatTopNResponseBody extends Model
{
    /**
     * @description Indicates whether Network Intelligence Service (NIS) is activated. The NatGatewayTopN parameter returns an empty array when NIS is not activated.
     *
     *   **true**: activated
     *   **false**: not activated
     *
     * @example true
     *
     * @var bool
     */
    public $isTopNOpen;

    /**
     * @description An array of statistics about real-time SNAT performance ranking.
     *
     * @var natGatewayTopN[]
     */
    public $natGatewayTopN;

    /**
     * @description The ID of the request.
     *
     * @example 77C512B5-12f3-f892-BD94-88A98271C1A0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isTopNOpen'     => 'IsTopNOpen',
        'natGatewayTopN' => 'NatGatewayTopN',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTopNOpen) {
            $res['IsTopNOpen'] = $this->isTopNOpen;
        }
        if (null !== $this->natGatewayTopN) {
            $res['NatGatewayTopN'] = [];
            if (null !== $this->natGatewayTopN && \is_array($this->natGatewayTopN)) {
                $n = 0;
                foreach ($this->natGatewayTopN as $item) {
                    $res['NatGatewayTopN'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNatTopNResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTopNOpen'])) {
            $model->isTopNOpen = $map['IsTopNOpen'];
        }
        if (isset($map['NatGatewayTopN'])) {
            if (!empty($map['NatGatewayTopN'])) {
                $model->natGatewayTopN = [];
                $n                     = 0;
                foreach ($map['NatGatewayTopN'] as $item) {
                    $model->natGatewayTopN[$n++] = null !== $item ? natGatewayTopN::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
