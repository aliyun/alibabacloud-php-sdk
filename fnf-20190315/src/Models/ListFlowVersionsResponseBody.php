<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Fnf\V20190315\Models\ListFlowVersionsResponseBody\flowVersions;

class ListFlowVersionsResponseBody extends Model
{
    /**
     * @var flowVersions[]
     */
    public $flowVersions;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowVersions' => 'FlowVersions',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->flowVersions)) {
            Model::validateArray($this->flowVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowVersions) {
            if (\is_array($this->flowVersions)) {
                $res['FlowVersions'] = [];
                $n1 = 0;
                foreach ($this->flowVersions as $item1) {
                    $res['FlowVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['FlowVersions'])) {
            if (!empty($map['FlowVersions'])) {
                $model->flowVersions = [];
                $n1 = 0;
                foreach ($map['FlowVersions'] as $item1) {
                    $model->flowVersions[$n1] = flowVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
