<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesRequest\tags;
use AlibabaCloud\Tea\Model;

class ImportAppAlertRulesRequest extends Model
{
    /**
     * @description ## Additional information about the **TemplageAlertConfig** parameter
     *
     **JSON string example and description**
     *
     * "appId": "70901",                              // The ID of the associated application. You can specify an arbitrary value in the alert template configuration. The actual value is automatically generated when ARMS creates the alert rule based on the alert template.
     * "pid": "atc889zkcf@d8deedfa9bf****",            // The PID of the associated application. You can specify an arbitrary value in the alert template configuration. The actual value is automatically generated when ARMS creates the alert rule based on the alert template.
     * ```
     *
     **Description of the Measure, Dimension, and metricParam.type parameters**
     *
     * The **metricParam.type** parameter specifies the unique type of each alert rule. Each type of alert rules can use a dimension for the conditions. Multiple conditions can be set for each type of alert rules. Each condition can use multiple metrics of the same type for calculation.****
     *
     * The **Dimensions.type** parameter has the following valid values:
     *
     *   `STATIC`: checks only the value of this dimension. In this case, you must set the **dimensions.value** parameter.
     *   `ALL`: checks the values of all dimensions. The metrics of all API operations are checked. If an operation triggers an alert, the operation name is displayed in the alert notification. In this case, you do not need to set the **dimensions.value** parameter.
     *   `DISABLE`: aggregates the values of all dimensions. In this case, you do not need to set the **dimensions.value** parameter.
     *
     **Alert metrics**
     *
     *   Alert type (metricParam.type): TXN
     *
     *   Dimension (dimensions.key): rpc
     *
     *   Metrics (alertRule.rules.measure):
     *
     *   appstat.txn.rt: the response time of API calls in milliseconds
     *   appstat.txn.count: the number of API calls
     *   appstat.txn.errcount: the number of API call errors
     *
     *   Alert type (metricParam.type): TXN_TYPE
     *
     *   Dimension (dimensions.key): rpcType
     *
     *   Metrics (alertRule.rules.measure):
     *
     *   appstat.incall.rt: the response time of API calls for the services that are provided by the application, in milliseconds
     *   appstat.incall.count: the number of API calls for the services that are provided by the application
     *   appstat.incall.error: the number of API call errors for the services that are provided by the application
     *   appstat.outcall.rt: the response time of API calls for the services on which the application depends, in milliseconds
     *   appstat.outcall.count: the number of API calls for the services on which the application depends
     *   appstat.outcall.error: the number of API call errors for the services on which the application depends
     *
     *   Alert type (metricParam.type): DB
     *
     *   Dimension (dimensions.key): endpoint
     *
     *   Metrics (alertRule.rules.measure):
     *
     *   appstat.database.rt: the response time of API calls for the database
     *   appstat.database.count: the number of API calls for the database
     *   appstat.database.errcount: the number of API call errors for the database
     *
     *   Alert type (metricParam.type): JVM
     *
     *   Dimension (dimensions.key): rootIp
     *
     *   Metrics (alertRule.rules.measure):
     *
     *   appstat.jvm.heap_used: the total memory space in the JVM heap, in bytes
     *   appstat.jvm.GcPsScavengeCount: the number of garbage collections (GCs) in JVM
     *   appstat.jvm.GcPsMarkSweepCount: the number of tag deletions in JVM
     *   appstat.jvm.GcG1OldGenCount: the number of Garbage-First (G1) GCs in the old generation
     *   appstat.jvm.GcG1YoungGenCount: the number of G1 GCs in the young generation
     *   appstat.jvm.gc.YoungGcCountInstant: the number of GCs in the young generation
     *   appstat.jvm.gc.OldGcCountInstant: the number of full heap GCs (Full GCs) in JVM
     *   appstat.jvm.gc.YoungGcTimeInstant: the time that is consumed for the GCs in the young generation, in milliseconds
     *   appstat.jvm.gc.OldGcTimeInstant: the time that is consumed for the Full GCs in JVM, in milliseconds
     *   appstat.jvm.ThreadCount: the total number of JVM threads
     *   appstat.jvm.non_heap_used: the used space of the non-heap JVM memory, in bytes
     *   appstat.jvm.non_heap_max: the maximum space of the non-heap JVM memory, in bytes
     *   appstat.jvm.non_heap_init: the initial space of the non-heap JVM memory, in bytes
     *   appstat.jvm.non_heap_committed: the submitted space of the non-heap JVM memory, in bytes
     *
     *   Alert type (metricParam.type): HOST
     *
     *   Dimension (dimensions.key): rootIp
     *
     *   Metrics (alertRule.rules.measure):
     *
     *   appstat.jvm.SystemCpuUser: the used CPU of the host, in percentage
     *   appstat.jvm.SystemMemFree: the idle memory space of the host, in bytes
     *   appstat.jvm.SystemDiskFree: the idle disk space of the host, in bytes
     *   appstat.jvm.SystemNetInErrs: the number of error messages that is received by the host
     *   appstat.jvm.SystemNetOutErrs: the number of error messages that is sent by the host
     *   appstat.jvm.SystemLoad: the system load of the host
     *
     *   Alert type (metricParam.type): EXCEPTION
     *
     *   Dimension (dimensions.key): rpc
     *
     *   Metrics (alertRule.rules.measure):
     *
     *   appstat.exception.rt: the response time of abnormal API calls for the application, in milliseconds
     *   appstat.exception.count: the number of abnormal API calls for the application
     *
     * @example [123, 234]
     *
     * @var string
     */
    public $contactGroupIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAutoStart;

    /**
     * @description The operation that you want to perform. Set the value to **ImportAppAlertRules**.
     *
     * @example ["atc889zkcf@d8deedfa9bfxxxx", "acd129bfcf@d5daebfa6cdxxxx"]
     *
     * @var string
     */
    public $pids;

    /**
     * @description Specifies whether to enable the alert rule after it is created. Default value: `false`.
     *
     *   `true`: enables the alert rule.
     *   `false`: disables the alert rule.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templageAlertConfig;

    /**
     * @description The ID of the request.
     *
     * @example 324324234
     *
     * @var string
     */
    public $templateAlertId;
    protected $_name = [
        'contactGroupIds'     => 'ContactGroupIds',
        'isAutoStart'         => 'IsAutoStart',
        'pids'                => 'Pids',
        'regionId'            => 'RegionId',
        'tags'                => 'Tags',
        'templageAlertConfig' => 'TemplageAlertConfig',
        'templateAlertId'     => 'TemplateAlertId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->isAutoStart) {
            $res['IsAutoStart'] = $this->isAutoStart;
        }
        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templageAlertConfig) {
            $res['TemplageAlertConfig'] = $this->templageAlertConfig;
        }
        if (null !== $this->templateAlertId) {
            $res['TemplateAlertId'] = $this->templateAlertId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportAppAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['IsAutoStart'])) {
            $model->isAutoStart = $map['IsAutoStart'];
        }
        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplageAlertConfig'])) {
            $model->templageAlertConfig = $map['TemplageAlertConfig'];
        }
        if (isset($map['TemplateAlertId'])) {
            $model->templateAlertId = $map['TemplateAlertId'];
        }

        return $model;
    }
}
