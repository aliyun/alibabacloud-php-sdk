<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\GetTransitRouterFlowTopNResponseBody\transitRouterFlowTopN;
use AlibabaCloud\Tea\Model;

class GetTransitRouterFlowTopNResponseBody extends Model
{
    /**
     * @example D5E98683-355B-5867-8D3D-A24755F6895B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var transitRouterFlowTopN[]
     */
    public $transitRouterFlowTopN;
    protected $_name = [
        'requestId'             => 'RequestId',
        'transitRouterFlowTopN' => 'TransitRouterFlowTopN',
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
        if (null !== $this->transitRouterFlowTopN) {
            $res['TransitRouterFlowTopN'] = [];
            if (null !== $this->transitRouterFlowTopN && \is_array($this->transitRouterFlowTopN)) {
                $n = 0;
                foreach ($this->transitRouterFlowTopN as $item) {
                    $res['TransitRouterFlowTopN'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTransitRouterFlowTopNResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransitRouterFlowTopN'])) {
            if (!empty($map['TransitRouterFlowTopN'])) {
                $model->transitRouterFlowTopN = [];
                $n                            = 0;
                foreach ($map['TransitRouterFlowTopN'] as $item) {
                    $model->transitRouterFlowTopN[$n++] = null !== $item ? transitRouterFlowTopN::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
