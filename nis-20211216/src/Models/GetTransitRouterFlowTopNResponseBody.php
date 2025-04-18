<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\GetTransitRouterFlowTopNResponseBody\transitRouterFlowTopN;

class GetTransitRouterFlowTopNResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transitRouterFlowTopN[]
     */
    public $transitRouterFlowTopN;
    protected $_name = [
        'requestId' => 'RequestId',
        'transitRouterFlowTopN' => 'TransitRouterFlowTopN',
    ];

    public function validate()
    {
        if (\is_array($this->transitRouterFlowTopN)) {
            Model::validateArray($this->transitRouterFlowTopN);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transitRouterFlowTopN) {
            if (\is_array($this->transitRouterFlowTopN)) {
                $res['TransitRouterFlowTopN'] = [];
                $n1 = 0;
                foreach ($this->transitRouterFlowTopN as $item1) {
                    $res['TransitRouterFlowTopN'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TransitRouterFlowTopN'])) {
            if (!empty($map['TransitRouterFlowTopN'])) {
                $model->transitRouterFlowTopN = [];
                $n1 = 0;
                foreach ($map['TransitRouterFlowTopN'] as $item1) {
                    $model->transitRouterFlowTopN[$n1++] = transitRouterFlowTopN::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
