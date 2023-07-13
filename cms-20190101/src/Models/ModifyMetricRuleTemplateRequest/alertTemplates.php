<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates\escalations;
use AlibabaCloud\Tea\Model;

class alertTemplates extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @description The statistical period of monitoring data. Valid values of N: 1 to 200.
     *
     * >  If the value is set to 300 seconds, the monitoring data is collected every 300 seconds. If the monitoring data is reported every 1 minute, the alert system calculates the average, maximum, and minimum values of the monitoring data of 5 minutes and checks whether the aggregated values exceed the threshold. To prevent unexpected alerts, we recommend that you set this parameter together with other parameters.
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The operation that you want to perform. Set the value to ModifyMetricRuleTemplate.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The ID of the alert template.
     *
     * For information about how to obtain the ID of an alert template, see [DescribeMetricRuleTemplateList](~~114982~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The dimension of the alert. It is an extended field. Valid values of N: 1 to 200.
     *
     * >  For more information about the values of extended fields, see [DescribeMetricRuleTemplateAttribute](~~114979~~).
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
     * @description The namespace of the cloud service. Valid values of N: 1 to 200.
     *
     * For information about how to obtain the namespace of a cloud service, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~163515~~).
     * @example rule1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The abbreviation of the service name. Valid values of N: 1 to 200. Valid values:
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
     *   ECC: Express Cloud Connect
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
     *   Lindorm: ApsaraDB for Lindorm
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
     * @example {"disk":"/"}
     *
     * @var string
     */
    public $selector;

    /**
     * @description The error message.
     *
     * @example https://apiwebhook.hipac.cn/api/v1/alarm/aly/eregfeeferrtbnmkdszp
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'escalations' => 'Escalations',
        'category'    => 'Category',
        'metricName'  => 'MetricName',
        'namespace'   => 'Namespace',
        'period'      => 'Period',
        'ruleName'    => 'RuleName',
        'selector'    => 'Selector',
        'webhook'     => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
