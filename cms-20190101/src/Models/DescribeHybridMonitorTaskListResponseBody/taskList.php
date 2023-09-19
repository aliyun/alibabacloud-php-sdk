<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\attachLabels;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\matchExpress;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\SLSProcessConfig;
use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @description The tags of the metric import task.
     *
     * @var attachLabels[]
     */
    public $attachLabels;

    /**
     * @description The interval at which the CloudMonitor agent collects host monitoring data. Valid values:
     *
     *   15
     *   30
     *   60
     *
     * Unit: seconds.
     * @example 60
     *
     * @var int
     */
    public $collectInterval;

    /**
     * @description The URL of the destination from which the CloudMonitor agent collects host monitoring data.
     *
     * @example http://localhost
     *
     * @var string
     */
    public $collectTargetEndpoint;

    /**
     * @description The relative path from which the CloudMonitor agent collects monitoring data.
     *
     * @example /metrics
     *
     * @var string
     */
    public $collectTargetPath;

    /**
     * @description The type of the monitoring data. Valid values: Spring, Tomcat, Nginx, Tengine, JVM, Redis, and MySQL.
     *
     * @example nginx
     *
     * @var string
     */
    public $collectTargetType;

    /**
     * @description The timeout period during which the CloudMonitor agent collects host monitoring data. Valid values:
     *
     *   0
     *   15
     *   30
     *   60
     *
     * Unit: seconds.
     * @example 15
     *
     * @var int
     */
    public $collectTimout;

    /**
     * @description The timestamp when the metric import task was created.
     *
     * Unit: milliseconds.
     * @example 1639382496000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the metric import task.
     *
     * @example aliyun
     *
     * @var string
     */
    public $description;

    /**
     * @description The additional information of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The ID of the application group.
     *
     * @example 3607****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The instances where monitoring data is collected in batches.
     *
     * @var string[]
     */
    public $instances;

    /**
     * @example C:\UserData\log\*.Log
     *
     * @var string
     */
    public $logFilePath;

    /**
     * @description The method that is used to aggregate on-premises log data.
     *
     * @example [{"metric": "metric1","filters": [{"column": "filed2","type": "include","values": ["222222"]}],"groupBys": [{"column": "filed3","name": "filed3"}],"calculates": [{"column": "field1","name": "avg","type": "avg"}]},{"metric": "metric2","filters": [{"column": "field1","type": "include","values": ["11111"]}],"groupBys": [{"column": "filed2","name": "filed2"}],"calculates": [{"column": "field1","name": "avg","type": "avg"}]}]
     *
     * @var string
     */
    public $logProcess;

    /**
     * @description The sample on-premises log.
     *
     * @example {"logContent":"100.116.134.26 1119 - [13/Aug/2019:16:55:46 +0800] POST metrichub-cn-hongkong.aliyun.com /agent/metrics/putLines 200 0 \"-\" \"127.0.0.1:7001\" \"Go-http-client/1.1\" \"-\" \"-\" \"0a98a21a15656865460656276e\"","addData":{"field1":["1119","1119"],"filed2":["POSTx","POST"],"filed3":["true","200"]}}
     *
     * @var string
     */
    public $logSample;

    /**
     * @description The result that is returned after on-premises log data is split based on the specified matching mode.
     *
     * > The matching modes of on-premises log data include full regex mode, delimiter mode, and JSON mode.
     * @example {"type": "regex","regex": "\\d+\\.\\d+\\.\\d+\\.\\d+\\s+(\\d+)\\s+\\S+\\s+\\[\\d+/\\S+/\\d+:\\d+:\\d+:\\d+\\s+\\+\\d+\\]\\s+(\\S+)\\s+\\S+\\s+/\\S+/\\S+/\\S+\\s+(\\d+)","columns": [{"name": "field1"},{"name": "filed2","translate": {"default": "-","mappings": [{"from": "(\\w+)","to": "$1x","type": "regex"}]}},{"name": "filed3","translate": {"default": "-","mappings": [{"from": "NumberRange(100,300)","to": "true","type": "function"}]}}]}
     *
     * @var string
     */
    public $logSplit;

    /**
     * @description The conditions that are used to match the instances in the application group.
     *
     * @var matchExpress[]
     */
    public $matchExpress;

    /**
     * @description The relationship between the conditions that are used to filter metric import tasks. Valid values:
     *
     *   or
     *   and
     *
     * @example or
     *
     * @var string
     */
    public $matchExpressRelation;

    /**
     * @description The namespace to which the host belongs.
     *
     * @example aliyun
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The network type of the host. Valid values:
     *
     *   `vpc`
     *   `Internet`
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The configurations of the logs that are imported from Log Service.
     *
     * @example {"express": [],"filter": {"filters": [{"key": "task_type","operator": "=","value": "1"}]},"groupby": [{"alias": "isp","key": "isp","sqlKey": "t.`isp`","valueKey": "isp"}],"interval": 60,"labels": [{"name": "__cms_app__","type": 0,"value": "sitemonitor"}],"statistics": [{"alias": "http_dns_time_avg","function": "avg","key": "http_dns_time"}]}
     *
     * @var string
     */
    public $SLSProcess;

    /**
     * @description The configurations of the logs that are imported from Log Service.
     *
     * > This parameter is returned only if the `TaskType` parameter is set to `aliyun_sls`.
     * @var SLSProcessConfig
     */
    public $SLSProcessConfig;

    /**
     * @description The ID of the member account.
     *
     * > This parameter is displayed only when you call this operation by using a management account.
     * @example 120886317861****
     *
     * @var string
     */
    public $targetUserId;

    /**
     * @description The ID of the metric import task.
     *
     * @example 36****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the metric import task.
     *
     * @example aliyun_task
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the metric import task. Valid values:
     *
     *   aliyun_fc: metric import tasks for Alibaba Cloud services
     *   aliyun_sls: metrics for logs imported from Log Service
     *
     * @example aliyun_sls
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The region where the host resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $uploadRegion;

    /**
     * @description The configuration file of the Alibaba Cloud service that you want to monitor by using Hybrid Cloud Monitoring.
     *
     *   namespace: the namespace of the Alibaba Cloud service.
     *   metric_list: the metrics of the Alibaba Cloud service.
     *
     * @example products:- namespace: acs_ecs_dashboard metric_info: - metric_list: - cpu_total
     *
     * @var string
     */
    public $YARMConfig;
    protected $_name = [
        'attachLabels'          => 'AttachLabels',
        'collectInterval'       => 'CollectInterval',
        'collectTargetEndpoint' => 'CollectTargetEndpoint',
        'collectTargetPath'     => 'CollectTargetPath',
        'collectTargetType'     => 'CollectTargetType',
        'collectTimout'         => 'CollectTimout',
        'createTime'            => 'CreateTime',
        'description'           => 'Description',
        'extraInfo'             => 'ExtraInfo',
        'groupId'               => 'GroupId',
        'instances'             => 'Instances',
        'logFilePath'           => 'LogFilePath',
        'logProcess'            => 'LogProcess',
        'logSample'             => 'LogSample',
        'logSplit'              => 'LogSplit',
        'matchExpress'          => 'MatchExpress',
        'matchExpressRelation'  => 'MatchExpressRelation',
        'namespace'             => 'Namespace',
        'networkType'           => 'NetworkType',
        'SLSProcess'            => 'SLSProcess',
        'SLSProcessConfig'      => 'SLSProcessConfig',
        'targetUserId'          => 'TargetUserId',
        'taskId'                => 'TaskId',
        'taskName'              => 'TaskName',
        'taskType'              => 'TaskType',
        'uploadRegion'          => 'UploadRegion',
        'YARMConfig'            => 'YARMConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachLabels) {
            $res['AttachLabels'] = [];
            if (null !== $this->attachLabels && \is_array($this->attachLabels)) {
                $n = 0;
                foreach ($this->attachLabels as $item) {
                    $res['AttachLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->collectInterval) {
            $res['CollectInterval'] = $this->collectInterval;
        }
        if (null !== $this->collectTargetEndpoint) {
            $res['CollectTargetEndpoint'] = $this->collectTargetEndpoint;
        }
        if (null !== $this->collectTargetPath) {
            $res['CollectTargetPath'] = $this->collectTargetPath;
        }
        if (null !== $this->collectTargetType) {
            $res['CollectTargetType'] = $this->collectTargetType;
        }
        if (null !== $this->collectTimout) {
            $res['CollectTimout'] = $this->collectTimout;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->logFilePath) {
            $res['LogFilePath'] = $this->logFilePath;
        }
        if (null !== $this->logProcess) {
            $res['LogProcess'] = $this->logProcess;
        }
        if (null !== $this->logSample) {
            $res['LogSample'] = $this->logSample;
        }
        if (null !== $this->logSplit) {
            $res['LogSplit'] = $this->logSplit;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = [];
            if (null !== $this->matchExpress && \is_array($this->matchExpress)) {
                $n = 0;
                foreach ($this->matchExpress as $item) {
                    $res['MatchExpress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matchExpressRelation) {
            $res['MatchExpressRelation'] = $this->matchExpressRelation;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->SLSProcess) {
            $res['SLSProcess'] = $this->SLSProcess;
        }
        if (null !== $this->SLSProcessConfig) {
            $res['SLSProcessConfig'] = null !== $this->SLSProcessConfig ? $this->SLSProcessConfig->toMap() : null;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->uploadRegion) {
            $res['UploadRegion'] = $this->uploadRegion;
        }
        if (null !== $this->YARMConfig) {
            $res['YARMConfig'] = $this->YARMConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachLabels'])) {
            if (!empty($map['AttachLabels'])) {
                $model->attachLabels = [];
                $n                   = 0;
                foreach ($map['AttachLabels'] as $item) {
                    $model->attachLabels[$n++] = null !== $item ? attachLabels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CollectInterval'])) {
            $model->collectInterval = $map['CollectInterval'];
        }
        if (isset($map['CollectTargetEndpoint'])) {
            $model->collectTargetEndpoint = $map['CollectTargetEndpoint'];
        }
        if (isset($map['CollectTargetPath'])) {
            $model->collectTargetPath = $map['CollectTargetPath'];
        }
        if (isset($map['CollectTargetType'])) {
            $model->collectTargetType = $map['CollectTargetType'];
        }
        if (isset($map['CollectTimout'])) {
            $model->collectTimout = $map['CollectTimout'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = $map['Instances'];
            }
        }
        if (isset($map['LogFilePath'])) {
            $model->logFilePath = $map['LogFilePath'];
        }
        if (isset($map['LogProcess'])) {
            $model->logProcess = $map['LogProcess'];
        }
        if (isset($map['LogSample'])) {
            $model->logSample = $map['LogSample'];
        }
        if (isset($map['LogSplit'])) {
            $model->logSplit = $map['LogSplit'];
        }
        if (isset($map['MatchExpress'])) {
            if (!empty($map['MatchExpress'])) {
                $model->matchExpress = [];
                $n                   = 0;
                foreach ($map['MatchExpress'] as $item) {
                    $model->matchExpress[$n++] = null !== $item ? matchExpress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MatchExpressRelation'])) {
            $model->matchExpressRelation = $map['MatchExpressRelation'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['SLSProcess'])) {
            $model->SLSProcess = $map['SLSProcess'];
        }
        if (isset($map['SLSProcessConfig'])) {
            $model->SLSProcessConfig = SLSProcessConfig::fromMap($map['SLSProcessConfig']);
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UploadRegion'])) {
            $model->uploadRegion = $map['UploadRegion'];
        }
        if (isset($map['YARMConfig'])) {
            $model->YARMConfig = $map['YARMConfig'];
        }

        return $model;
    }
}
