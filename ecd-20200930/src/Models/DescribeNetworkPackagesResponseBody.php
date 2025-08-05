<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponseBody\networkPackages;

class DescribeNetworkPackagesResponseBody extends Model
{
    /**
     * @var networkPackages[]
     */
    public $networkPackages;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkPackages' => 'NetworkPackages',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->networkPackages)) {
            Model::validateArray($this->networkPackages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkPackages) {
            if (\is_array($this->networkPackages)) {
                $res['NetworkPackages'] = [];
                $n1 = 0;
                foreach ($this->networkPackages as $item1) {
                    $res['NetworkPackages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkPackages'])) {
            if (!empty($map['NetworkPackages'])) {
                $model->networkPackages = [];
                $n1 = 0;
                foreach ($map['NetworkPackages'] as $item1) {
                    $model->networkPackages[$n1] = networkPackages::fromMap($item1);
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
