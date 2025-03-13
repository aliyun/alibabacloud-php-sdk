<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponseBody\networkPackages;
use AlibabaCloud\Tea\Model;

class DescribeNetworkPackagesResponseBody extends Model
{
    /**
     * @description The premium bandwidth plans.
     *
     * @var networkPackages[]
     */
    public $networkPackages;

    /**
     * @description The token that is used to start the next query. If the value of this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkPackages' => 'NetworkPackages',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkPackages) {
            $res['NetworkPackages'] = [];
            if (null !== $this->networkPackages && \is_array($this->networkPackages)) {
                $n = 0;
                foreach ($this->networkPackages as $item) {
                    $res['NetworkPackages'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeNetworkPackagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPackages'])) {
            if (!empty($map['NetworkPackages'])) {
                $model->networkPackages = [];
                $n                      = 0;
                foreach ($map['NetworkPackages'] as $item) {
                    $model->networkPackages[$n++] = null !== $item ? networkPackages::fromMap($item) : $item;
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
