<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponse\networkPackages;
use AlibabaCloud\Tea\Model;

class DescribeNetworkPackagesResponse extends Model
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
     * @var networkPackages[]
     */
    public $networkPackages;
    protected $_name = [
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'networkPackages' => 'NetworkPackages',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('networkPackages', $this->networkPackages, true);
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
        if (null !== $this->networkPackages) {
            $res['NetworkPackages'] = [];
            if (null !== $this->networkPackages && \is_array($this->networkPackages)) {
                $n = 0;
                foreach ($this->networkPackages as $item) {
                    $res['NetworkPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkPackagesResponse
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
        if (isset($map['NetworkPackages'])) {
            if (!empty($map['NetworkPackages'])) {
                $model->networkPackages = [];
                $n                      = 0;
                foreach ($map['NetworkPackages'] as $item) {
                    $model->networkPackages[$n++] = null !== $item ? networkPackages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
