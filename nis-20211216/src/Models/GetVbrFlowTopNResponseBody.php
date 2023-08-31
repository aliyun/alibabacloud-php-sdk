<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\GetVbrFlowTopNResponseBody\virtualBorderRouterFlowlogTopN;
use AlibabaCloud\Tea\Model;

class GetVbrFlowTopNResponseBody extends Model
{
    /**
     * @example A7F0D6EC-E19E-58AC-AC9F-08036763960F
     *
     * @var string
     */
    public $requestId;

    /**
     * @var virtualBorderRouterFlowlogTopN[]
     */
    public $virtualBorderRouterFlowlogTopN;
    protected $_name = [
        'requestId'                      => 'RequestId',
        'virtualBorderRouterFlowlogTopN' => 'VirtualBorderRouterFlowlogTopN',
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
        if (null !== $this->virtualBorderRouterFlowlogTopN) {
            $res['VirtualBorderRouterFlowlogTopN'] = [];
            if (null !== $this->virtualBorderRouterFlowlogTopN && \is_array($this->virtualBorderRouterFlowlogTopN)) {
                $n = 0;
                foreach ($this->virtualBorderRouterFlowlogTopN as $item) {
                    $res['VirtualBorderRouterFlowlogTopN'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVbrFlowTopNResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VirtualBorderRouterFlowlogTopN'])) {
            if (!empty($map['VirtualBorderRouterFlowlogTopN'])) {
                $model->virtualBorderRouterFlowlogTopN = [];
                $n                                     = 0;
                foreach ($map['VirtualBorderRouterFlowlogTopN'] as $item) {
                    $model->virtualBorderRouterFlowlogTopN[$n++] = null !== $item ? virtualBorderRouterFlowlogTopN::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
