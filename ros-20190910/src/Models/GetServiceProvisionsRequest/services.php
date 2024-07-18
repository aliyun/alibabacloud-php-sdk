<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsRequest;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @description The name of the service or feature. Valid values:
     *
     *   AHAS: Application High Availability Service
     *   ARMS: Application Real-Time Monitoring Service (ARMS)
     *   ApiGateway: API Gateway
     *   BatchCompute: Batch Compute
     *   BrainIndustrial: Industrial Brain
     *   CloudStorageGateway: Cloud Storage Gateway (CSG)
     *   CMS: CloudMonitor
     *   CR: Container Registry
     *   CS: Container Service for Kubernetes (ACK)
     *   DCDN: Dynamic Content Delivery Network (DCDN)
     *   DataHub: DataHub
     *   DataWorks: DataWorks
     *   EDAS: Enterprise Distributed Application Service (EDAS)
     *   EHPC: E-HPC
     *   EMAS: Enterprise Mobile Application Studio (EMAS)
     *   FC: Function Compute
     *   FNF: CloudFlow (SWF)
     *   MaxCompute: MaxCompute
     *   MNS: Message Service (MNS)
     *   HBR: Cloud Backup
     *   IMM: Intelligent Media Management (IMM)
     *   IOT: IoT Platform
     *   KMS: Key Management Service (KMS)
     *   NAS: Apsara File Storage NAS (NAS)
     *   NLP: Natural Language Processing (NLP)
     *   OSS: Object Storage Service (OSS)
     *   OTS: Tablestore
     *   PrivateLink: PrivateLink
     *   PrivateZone: Alibaba Cloud DNS PrivateZone
     *   RocketMQ: ApsaraMQ for RocketMQ
     *   SAE: Serverless App Engine (SAE)
     *   SLS: Simple Log Service (SLS)
     *   TrafficMirror: traffic mirroring
     *   VS: Video Surveillance System
     *   Xtrace: Managed Service for OpenTelemetry
     *
     * This parameter is required.
     * @example EHPC
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
