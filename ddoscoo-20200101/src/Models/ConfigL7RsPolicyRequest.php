<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigL7RsPolicyRequest extends Model
{
    /**
     * @description The domain name of the website.
     *
     * This parameter is required.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The back-to-origin policy. The value is a string that consists of a JSON struct. The JSON struct contains the following fields:
     *
     *   **ProxyMode**: The load balancing algorithm for back-to-origin traffic. This field is required and must be a string. Valid values:
     *
     *   **ip_hash**: the IP hash algorithm. This algorithm is used to redirect requests from the same IP address to the same origin server.
     *   **rr**: the round-robin algorithm. This algorithm is used to redirect requests to origin servers in turn. If you use this algorithm, you can specify a weight for each server based on server performance.
     *   **least_time**: the least response time algorithm. This algorithm is used to minimize the latency when requests are forwarded from the instance to origin servers based on the intelligent DNS resolution feature.
     *
     *   **Attributes**: the parameters for back-to-origin processing. This field is optional and must be a JSON array. Each element in the array contains the following fields:
     *
     *   **RealServer**: the address of the origin server. This field is optional and must be a string.
     *
     *   **Attribute**: the parameter for back-to-origin processing. This field is optional and must be a JSON object. Valid values:
     *
     *   **Weight**: the weight of the server. This field is optional and must be an integer. This field takes effect only when **ProxyMode** is set to **rr**. Valid values: **1** to **100**. Default value: **100**. An origin server with a higher weight receives more requests.
     *   **ConnectTimeout**: the timeout period for new connections. This field is optional and must be an integer. Valid values: **1** to **10**. Unit: seconds. Default value: **5**.
     *   **FailTimeout**: the period after which a connection is considered to have failed. This field is optional and must be an integer. Valid values: **1** to **3600**. Unit: seconds. Default value: **10**.
     *   **MaxFails**: the maximum number of failures allowed. This field is related to health checks. This field is optional and must be an integer. Valid values: **1** to **10**. Unit: seconds. Default value: **3**.
     *   **Mode**: the primary/secondary attribute flag. This parameter is optional and must be a string. Valid values: **active** (primary) and **backup** (secondary).
     *   **ReadTimeout**: the read timeout period. This field is optional and must be an integer. Valid values: **10** to **300**. Unit: seconds. Default value: **120**.
     *   **SendTimeout**: the write timeout period. This field is optional and must be an integer. Valid values: **10** to **300**. Unit: seconds. Default value: **120**.
     *
     * This parameter is required.
     * @example {"ProxyMode":"rr","Attributes":[{"RealServer":"1.***.***.1","Attribute":{"Weight":100}},{"RealServer":"2.***.***.2","Attribute":{"Weight":100}}]}
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](https://help.aliyun.com/document_detail/94485.html).
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The retry switch. Valid values:
     *
     *   **1**: on
     *   **0**: off
     *
     * @example 1
     *
     * @var int
     */
    public $upstreamRetry;
    protected $_name = [
        'domain'          => 'Domain',
        'policy'          => 'Policy',
        'resourceGroupId' => 'ResourceGroupId',
        'upstreamRetry'   => 'UpstreamRetry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->upstreamRetry) {
            $res['UpstreamRetry'] = $this->upstreamRetry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigL7RsPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['UpstreamRetry'])) {
            $model->upstreamRetry = $map['UpstreamRetry'];
        }

        return $model;
    }
}
