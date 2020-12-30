<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListVpcEndpointsResponseBody\vpcEndpoints;
use AlibabaCloud\Tea\Model;

class ListVpcEndpointsResponseBody extends Model
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
     * @var vpcEndpoints[]
     */
    public $vpcEndpoints;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'vpcEndpoints' => 'VpcEndpoints',
        'maxResults'   => 'MaxResults',
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
        if (null !== $this->vpcEndpoints) {
            $res['VpcEndpoints'] = [];
            if (null !== $this->vpcEndpoints && \is_array($this->vpcEndpoints)) {
                $n = 0;
                foreach ($this->vpcEndpoints as $item) {
                    $res['VpcEndpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcEndpointsResponseBody
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
        if (isset($map['VpcEndpoints'])) {
            if (!empty($map['VpcEndpoints'])) {
                $model->vpcEndpoints = [];
                $n                   = 0;
                foreach ($map['VpcEndpoints'] as $item) {
                    $model->vpcEndpoints[$n++] = null !== $item ? vpcEndpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
