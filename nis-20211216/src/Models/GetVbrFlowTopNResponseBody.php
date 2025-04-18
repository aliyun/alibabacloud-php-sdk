<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetVbrFlowTopNResponseBody\virtualBorderRouterFlowlogTopN;

class GetVbrFlowTopNResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var virtualBorderRouterFlowlogTopN[]
     */
    public $virtualBorderRouterFlowlogTopN;
    protected $_name = [
        'requestId' => 'RequestId',
        'virtualBorderRouterFlowlogTopN' => 'VirtualBorderRouterFlowlogTopN',
    ];

    public function validate()
    {
        if (\is_array($this->virtualBorderRouterFlowlogTopN)) {
            Model::validateArray($this->virtualBorderRouterFlowlogTopN);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->virtualBorderRouterFlowlogTopN) {
            if (\is_array($this->virtualBorderRouterFlowlogTopN)) {
                $res['VirtualBorderRouterFlowlogTopN'] = [];
                $n1 = 0;
                foreach ($this->virtualBorderRouterFlowlogTopN as $item1) {
                    $res['VirtualBorderRouterFlowlogTopN'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VirtualBorderRouterFlowlogTopN'])) {
            if (!empty($map['VirtualBorderRouterFlowlogTopN'])) {
                $model->virtualBorderRouterFlowlogTopN = [];
                $n1 = 0;
                foreach ($map['VirtualBorderRouterFlowlogTopN'] as $item1) {
                    $model->virtualBorderRouterFlowlogTopN[$n1++] = virtualBorderRouterFlowlogTopN::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
