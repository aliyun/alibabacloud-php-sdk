<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody\resourceDrifts;

class ListStackResourceDriftsResponseBody extends Model
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
     * @var resourceDrifts[]
     */
    public $resourceDrifts;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceDrifts' => 'ResourceDrifts',
    ];

    public function validate()
    {
        if (\is_array($this->resourceDrifts)) {
            Model::validateArray($this->resourceDrifts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceDrifts) {
            if (\is_array($this->resourceDrifts)) {
                $res['ResourceDrifts'] = [];
                $n1 = 0;
                foreach ($this->resourceDrifts as $item1) {
                    $res['ResourceDrifts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceDrifts'])) {
            if (!empty($map['ResourceDrifts'])) {
                $model->resourceDrifts = [];
                $n1 = 0;
                foreach ($map['ResourceDrifts'] as $item1) {
                    $model->resourceDrifts[$n1] = resourceDrifts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
