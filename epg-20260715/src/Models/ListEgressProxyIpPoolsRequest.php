<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyIpPoolsRequest\tag;

class ListEgressProxyIpPoolsRequest extends Model
{
    /**
     * @var string[]
     */
    public $egressProxyGatewayIds;

    /**
     * @var string[]
     */
    public $egressProxyIpPoolIds;

    /**
     * @var string[]
     */
    public $egressProxyIpPoolNames;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $skip;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'egressProxyGatewayIds' => 'EgressProxyGatewayIds',
        'egressProxyIpPoolIds' => 'EgressProxyIpPoolIds',
        'egressProxyIpPoolNames' => 'EgressProxyIpPoolNames',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'skip' => 'Skip',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyGatewayIds)) {
            Model::validateArray($this->egressProxyGatewayIds);
        }
        if (\is_array($this->egressProxyIpPoolIds)) {
            Model::validateArray($this->egressProxyIpPoolIds);
        }
        if (\is_array($this->egressProxyIpPoolNames)) {
            Model::validateArray($this->egressProxyIpPoolNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyGatewayIds) {
            if (\is_array($this->egressProxyGatewayIds)) {
                $res['EgressProxyGatewayIds'] = [];
                $n1 = 0;
                foreach ($this->egressProxyGatewayIds as $item1) {
                    $res['EgressProxyGatewayIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->egressProxyIpPoolIds) {
            if (\is_array($this->egressProxyIpPoolIds)) {
                $res['EgressProxyIpPoolIds'] = [];
                $n1 = 0;
                foreach ($this->egressProxyIpPoolIds as $item1) {
                    $res['EgressProxyIpPoolIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->egressProxyIpPoolNames) {
            if (\is_array($this->egressProxyIpPoolNames)) {
                $res['EgressProxyIpPoolNames'] = [];
                $n1 = 0;
                foreach ($this->egressProxyIpPoolNames as $item1) {
                    $res['EgressProxyIpPoolNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EgressProxyGatewayIds'])) {
            if (!empty($map['EgressProxyGatewayIds'])) {
                $model->egressProxyGatewayIds = [];
                $n1 = 0;
                foreach ($map['EgressProxyGatewayIds'] as $item1) {
                    $model->egressProxyGatewayIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EgressProxyIpPoolIds'])) {
            if (!empty($map['EgressProxyIpPoolIds'])) {
                $model->egressProxyIpPoolIds = [];
                $n1 = 0;
                foreach ($map['EgressProxyIpPoolIds'] as $item1) {
                    $model->egressProxyIpPoolIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EgressProxyIpPoolNames'])) {
            if (!empty($map['EgressProxyIpPoolNames'])) {
                $model->egressProxyIpPoolNames = [];
                $n1 = 0;
                foreach ($map['EgressProxyIpPoolNames'] as $item1) {
                    $model->egressProxyIpPoolNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
