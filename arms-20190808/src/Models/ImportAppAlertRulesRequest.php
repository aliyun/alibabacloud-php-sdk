<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesRequest\tags;
use AlibabaCloud\Tea\Model;

class ImportAppAlertRulesRequest extends Model
{
    /**
     * @description The IDs of the alert contact groups. The value must be a JSON array.
     *
     * @example [123, 234]
     *
     * @var string
     */
    public $contactGroupIds;

    /**
     * @description Specifies whether to enable the alert rule after it is created. Default value: `false`.
     *
     *   `true`: enables the alert rule.
     *   `false`: disables the alert rule.
     *
     * @example true
     *
     * @var bool
     */
    public $isAutoStart;

    /**
     * @description The process identifiers (PIDs) of the applications associated with the alert rule. The value must be a JSON array. For more information about how to obtain the PID, see [Obtain the PID of an application](~~186100#section-bkl-3j6-ezg~~).
     *
     * @example ["atc889zkcf@d8deedfa9bfxxxx", "acd129bfcf@d5daebfa6cdxxxx"]
     *
     * @var string
     */
    public $pids;

    /**
     * @description The ID of the region where the associated applications reside.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The configurations of the alert template based on which you want to create an alert rule. The value must be a JSON string. You must set at least one of the **TemplateAlertId** and **TemplageAlertConfig** parameters. If you set both parameters, the **TemplateAlertId** parameter prevails. For more information about the TemplageAlertConfig parameter, see the following **additional information about the TemplageAlertConfig parameter**.
     *
     * @example [ { "contactGroupIds": "381", "alertType": 5, "alarmContext": { "subTitle": "", "content": "Alarm name: $alarm name\nFilter condition: $filter\nAlarm time : $Alarm time\nAlarm content: $Alarm content\nNote: Before the recovery email is received, the alarm is in continuous alarm, and you will be reminded again after 24 hours!" }, "alertLevel": "WARN", " metricParam": { "appId": "70901", "pid": "atc889zkcf@d8deedfa9bf****", "type": "TXN", "dimensions": [ { "type": "STATIC", "value ": "\\/hello_test_api_address\\/test1", "key": "rpc" } ] }, "alertWay": [ "SMS", "MAIL", "DING_ROBOT" ], "alertRule": { "rules" : [ { "measure": "appstat.txn.rt", "alias": "Entry call response time_ms", "aggregates": "AVG", "nValue": 1, "value": 1, "operator ": "CURRENT_GTE" } ], "operator": "|" }, "title": "Alarm template alarm name", "config": "{\"continuous\":false,\"dataRevision\":2, \"ownerId\":\"123412341234\"}", "notice": { "noticeStartTime": 1480521600000, "startTime": 1480521600000, "endTime": 1480607940000, "noticeEndTime": 1480607940000 }, "stat us": "NON " } ]
     *
     * @var string
     */
    public $templageAlertConfig;

    /**
     * @description The ID of the alert template. You must set at least one of the **TemplateAlertId** and **TemplageAlertConfig** parameters. If you set both parameters, the **TemplateAlertId** parameter prevails.
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
