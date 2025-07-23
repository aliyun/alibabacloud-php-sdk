<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class productWorkerCount extends Model
{
    /**
     * @description The total number of resources of a cloud service in the deployment task.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the cloud service. Valid values:
     *
     *   **SLB**: Classic Load Balancer (CLB). This value is supported only at the China site (aliyun.com).
     *   **LIVE**: ApsaraVideo Live. This value is supported only at the China site (aliyun.com).
     *   **webHosting**: Cloud Web Hosting. This value is supported only at the China site (aliyun.com).
     *   **VOD**: ApsaraVideo VOD. This value is supported only at the China site (aliyun.com).
     *   **CR**: Container Registry. This value is supported only at the China site (aliyun.com).
     *   **DCDN**: Dynamic Content Delivery Network (DCDN).
     *   **DDOS**: Anti-DDoS.
     *   **CDN**: Alibaba Cloud CDN (CDN).
     *   **ALB**: Application Load Balancer (ALB).
     *   **APIGateway**: API Gateway.
     *   **FC**: Function Compute.
     *   **GA**: Global Accelerator (GA).
     *   **MSE**: Microservices Engine (MSE).
     *   **NLB**: Network Load Balancer (NLB).
     *   **OSS**: Object Storage Service (OSS).
     *   **SAE**: Serverless App Engine (SAE).
     *   **TencentCDN**: Tencent Cloud Content Delivery Network (CDN).
     *   **WAF**: Web Application Firewall (WAF).
     *
     * @example NLB
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'count' => 'Count',
        'productName' => 'ProductName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productWorkerCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
