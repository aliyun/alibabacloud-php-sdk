<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowsResponseBody\flows;
use AlibabaCloud\Tea\Model;

class ListFlowsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var flows[]
     */
    public $flows;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'flows'     => 'Flows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flows) {
            $res['Flows'] = [];
            if (null !== $this->flows && \is_array($this->flows)) {
                $n = 0;
                foreach ($this->flows as $item) {
                    $res['Flows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Flows'])) {
            if (!empty($map['Flows'])) {
                $model->flows = [];
                $n            = 0;
                foreach ($map['Flows'] as $item) {
                    $model->flows[$n++] = null !== $item ? flows::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
