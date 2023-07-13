<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleRequest\escalations;

use AlibabaCloud\Tea\Model;

class critical extends Model
{
    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before a Warn-level alert is triggered.
     *
     * @example GreaterThanOrEqualToThreshold
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The interval at which the alert rule is executed. Unit: seconds.
     *
     * >  We recommend that you set the interval to the data aggregation period. If the interval is shorter than the data aggregation period, alerts cannot be triggered due to insufficient data.
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The name of the cloud service. Valid values:
     *
     *   PolarDB: PolarDB
     *   NewBGPDDoS: Anti-DDoS Pro
     *   IoTDevice: IoT Platform
     *   DRDS: PolarDB-X
     *   VS: Video Surveillance System
     *   AMQP: Alibaba Cloud Message Queue for AMQP
     *   ADS: AnalyticDB
     *   APIGateway: API Gateway
     *   InternetSharedBandwidth: EIP Bandwidth Plan
     *   CDN: Alibaba Cloud Content Delivery Network (CDN)
     *   CEN: Cloud Enterprise Network (CEN)
     *   DCDN: Dynamic Route for CDN (DCDN)
     *   DDoS: Anti-DDoS
     *   ECS: Elastic Compute Service (ECS)
     *   DirectMail: Direct Mail
     *   Elasticsearch: Elasticsearch
     *   EMR: E-MapReduce (EMR)
     *   ESS: Auto Scaling
     *   FunctionCompute: Function Compute
     *   RealtimeCompute: Realtime Compute for Apache Flink
     *   GlobalAcceleration: Global Accelerator (GA)
     *   Hbase: ApsaraDB for HBase
     *   TSDB: Time Series Database (TSDB)
     *   IPv6trans: IPv6 Translation Service
     *   Kafka: Message Queue for Apache Kafka
     *   Kubernetes: Container Service for Kubernetes (ACK)
     *   KVstore: ApsaraDB for Redis
     *   MNS: Message Service (MNS)
     *   MongoDB: ApsaraDB for MongoDB
     *   MQ: Message Queue
     *   NAT: NAT Gateway
     *   OpenAd: Open Ad
     *   OpenSearch: Open Search
     *   OSS: Object Storage Service (OSS)
     *   PCDN: P2P CDN
     *   petadata: HybridDB for MySQL
     *   RDS: ApsaraDB RDS
     *   SCDN: Secure CDN
     *   SLB: Server Load Balancer (SLB)
     *   SLS: Log Service
     *   VideoLive: ApsaraVideo Live
     *   VOD: ApsaraVideo VOD
     *   EIP: Elastic IP Address (EIP)
     *   VPN: VPN Gateway
     *   AIRec: Artificial Intelligence Recommendation (AIRec)
     *   GPDB: AnalyticDB for PostgreSQL
     *   DBS: Database Backup (DBS)
     *   SAG: Smart Access Gateway (SAG)
     *   Memcache: ApsaraDB for Memcache
     *   IOT_EDGE: Link IoT Edge
     *   OCS: ApsaraDB for Memcache (previous version)
     *   VPC: Express Connect
     *   EHPC: Elastic High Performance Computing (E-HPC)
     *   MPS: ApsaraVideo Media Processing (MPS)
     *   ENS: Edge Node Service (ENS)
     *   MaxCompute_Prepay: MaxCompute
     *   IoT_Kubernetes: Edge Application Hosting
     *   CMS: CloudMonitor
     *   batchcomputenew: Batch Compute
     *   HBaseUE: ApsaraDB for HBase Performance-enhanced Edition
     *   UIS: Ultimate Internet Service (UIS)
     *   nls: Intelligent Speech Interaction
     *   ots: Tablestore
     *   NAS: Apsara File Storage NAS
     *   ECI: Elastic Container Instance (ECI)
     *   OpenAPI: OpenAPI Explorer
     *   pvtzpost: Alibaba Cloud DNS PrivateZone
     *   blinkonk8s: Flink on Kubernetes
     *   FunctionFlow: Serverless Workflow (SWF)
     *   SMC: Server Migration Center (SMC)
     *   ddosbgp: Anti-DDoS Origin
     *   baas: Blockchain as a Service
     *   privatelink: PrivateLink
     *   cds: ApsaraDB for Cassandra
     *   DDH: Dedicated Host
     *   RocketMQ: Message Queue for Apache RocketMQ
     *   ECC: Express Cloud Connect (ECC)
     *   hbaseserverless: ApsaraDB for HBase Serverless Edition
     *   mns_tmp: Message Service
     *   hdr: Hybrid Disaster Recovery (HDR)
     *   hbr: Hybrid Backup Recovery (HBR)
     *   ADB: AnalyticDB for MySQL V3.0
     *   tag: Tag Service
     *   GDB: Graph Database
     *   WAF: Web Application Firewall (WAF)
     *   hcs_sgw: Cloud Storage Gateway (CSG)
     *   ipv6gateway: IPv6 Gateway
     *   RDS_SAR: ApsaraDB Exclusive Host Group
     *   learn: Machine Learning Platform for AI
     *   ROS: Resource Orchestration Service (ROS)
     *   OOS: Operation Orchestration Service (OOS)
     *   bds: Data Synchronization for HBase
     *   cfw: Cloud Firewall
     *   ddosDip: Anti-DDoS Premium
     *   datahub: DataHub
     *   hologres: Hologres
     *   ExpressConnect: Express Connect
     *   dbfs: Database File System (DBFS)
     *   clickhouse: ApsaraDB for ClickHouse
     *   k8s: Container Service for Kubernetes (ACK)
     *   DTS: Data Transmission Service (DTS)
     *   AnycastEIP: Anycast Elastic IP Address
     *   Lindorm: Lindorm
     *   config: Cloud Config
     *   spark: Databricks DataInsight (DDI)
     *   serverless: Serverless App Engine (SAE)
     *   alb: Application Load Balancer (ALB)
     *   oceanbase: ApsaraDB for OceanBase
     *   KMS: Key Management Service (KMS)
     *   lvwang: Content Moderation
     *   LinkVisual: LinkVisual
     *   tair: ApsaraDB for Redis Enhanced Edition (Tair)
     *   dlf: Data Lake Formation (DLF)
     *   networkmonitor: Site Monitoring
     *   pnc: Physical Network Change
     *   AIS: Alibaba Cloud Infrastructure
     *   cloudgame: Cloud Gaming Platform
     *   RTC: Real-Time Communication
     *   cloudbox: CloudBox
     *   actiontrail: ActionTrail
     *   cc: Cloud Connector
     *   disk: Elastic Block Storage (EBS)
     *   easygene: Genomics Computing Platform
     *   cloudphone: Elastic Cloud Phone
     *   BMS: Bare Metal Management Service
     *   swas: Simple Application Server
     *   AvailabilityMonitoring: Availability Monitoring of CloudMonitor
     *
     * @example 90
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The first-level dimension of the alert rule in the application group.
     *
     * Set the value to a set of key-value pairs, for example, `userId:120886317861****` or `instanceId:i-m5e1qg6uo38rztr4****`.
     * @example 3
     *
     * @var int
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
        'times'              => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return critical
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
