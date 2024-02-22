<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesRequest\groupMetricRules\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesRequest\groupMetricRules\labels;
use AlibabaCloud\Tea\Model;

class groupMetricRules extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @description The name of the cloud service. Valid values of N: 1 to 200. Valid value:
     *
     *   PolarDB: PolarDB
     *   NewBGPDDoS: Anti-DDoS Pro
     *   IoTDevice: IoT Platform
     *   DRDS: Distributed Relational Database Service (DRDS)
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
     *   AIRec: Artificial Intelligence Recommendation
     *   GPDB: AnalyticDB for PostgreSQL
     *   DBS: Database Backup (DBS)
     *   SAG: Smart Access Gateway (SAG)
     *   Memcache: ApsaraDB for Memcache
     *   IOT_EDGE: Link IoT Edge
     *   OCS: ApsaraDB for Memcache (previous version)
     *   VPC: Express Connect
     *   EHPC: Elastic High Performance Computing (E-HPC)
     *   MPS: ApsaraVideo Media Processing
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
     * @example ECS
     *
     * @var string
     */
    public $category;

    /**
     * @description The alert contact groups. Valid values of N: 1 to 200.
     *
     * For information about how to obtain alert contact groups, see [DescribeContactGroupList](~~114922~~).
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The dimension of the alert rule. Valid values of N: 1 to 200.
     *
     * Set the value to a set of key-value pairs, for example, `userId:120886317861****` or `instanceId:i-m5e1qg6uo38rztr4****`.
     * @example [{"instanceId":"i-m5e1qg6uo38rztr4****"}]
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The time period during which the alert rule is effective. Valid values of N: 1 to 200.
     *
     * @example 05:31-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The subject of the alert notification email. Valid values of N: 1 to 200.
     *
     * @var string
     */
    public $emailSubject;

    /**
     * @description The interval at which CloudMonitor checks whether the alert rule is triggered. Valid values of N: 1 to 200.
     *
     * >  We recommend that you set the interval to the data aggregation period. If the interval is shorter than the data aggregation period, alerts cannot be triggered due to insufficient data.
     * @example 60
     *
     * @var string
     */
    public $interval;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @description The name of the metric. Valid values of N: 1 to 200.
     *
     * For information about how to obtain the name of a metric, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~163515~~).
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service. Valid values of N: 1 to 200.
     *
     * For information about how to obtain the namespace of a cloud service, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~163515~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The method that is used to handle alerts when no monitoring data is found. Valid values of N: 1 to 200. Valid value:
     *
     *   KEEP_LAST_STATE (default value): No operation is performed.
     *   INSUFFICIENT_DATA: An alert whose content is "Insufficient data" is triggered.
     *   OK: The alert rule has no active alerts.
     *
     * @example KEEP_LAST_STATE
     *
     * @var string
     */
    public $noDataPolicy;

    /**
     * @description The time period during which the alert rule is ineffective. Valid values of N: 1 to 200.
     *
     * @example 00:00-05:30
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @var string
     */
    public $options;

    /**
     * @description The aggregation period of the metric data. Valid values of N: 1 to 200.
     *
     * Set the `Period` parameter to an integral multiple of 60. Unit: seconds. Default value: 300.
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the alert rule. Valid values of N: 1 to 200.
     *
     * @example 456789
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule. Valid values of N: 1 to 200.
     *
     * @example ECS_Rule1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met. Valid values of N: 1 to 200.
     *
     * Unit: seconds. Default value: 86400. Minimum value: 3600.
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The callback URL. Valid values of N: 1 to 200.
     *
     * The callback URL must be accessible over the Internet. CloudMonitor pushes an alert notification to the specified callback URL by sending an HTTP POST request. Only the HTTP protocol is supported.
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'escalations'         => 'Escalations',
        'category'            => 'Category',
        'contactGroups'       => 'ContactGroups',
        'dimensions'          => 'Dimensions',
        'effectiveInterval'   => 'EffectiveInterval',
        'emailSubject'        => 'EmailSubject',
        'interval'            => 'Interval',
        'labels'              => 'Labels',
        'metricName'          => 'MetricName',
        'namespace'           => 'Namespace',
        'noDataPolicy'        => 'NoDataPolicy',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'options'             => 'Options',
        'period'              => 'Period',
        'ruleId'              => 'RuleId',
        'ruleName'            => 'RuleName',
        'silenceTime'         => 'SilenceTime',
        'webhook'             => 'Webhook',
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
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->emailSubject) {
            $res['EmailSubject'] = $this->emailSubject;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->noDataPolicy) {
            $res['NoDataPolicy'] = $this->noDataPolicy;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupMetricRules
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
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['EmailSubject'])) {
            $model->emailSubject = $map['EmailSubject'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NoDataPolicy'])) {
            $model->noDataPolicy = $map['NoDataPolicy'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
