<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UpdateDcdnDeliverTaskRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example The operation that you want to perform. Set the value to **UpdateDcdnDeliverTask**.
     *
     * @var string
     */
    public $deliver;

    /**
     * @description Domain Subscription
     *
     * @example 92
     *
     * @var int
     */
    public $deliverId;

    /**
     * @description {"schedName":"subscription task name","description":"description","crontab":"000**?","frequency":"d","status":"enable","effectiveFrom": "2020-09-17T00:00:00Z","effectiveEnd":"2020-11-17T00:00:00Z"}
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the tracking task.
     *
     * @example [{\"reportId\":2,\"conditions\":[{\"field\":\"prov\",\"op\":\"in\",\"value\":[\ "Heilongjiang\",\"Beijing\"]}]}]
     *
     * @var string
     */
    public $name;

    /**
     * @description The operations reports that are tracked by the task. The data must be escaped in JSON.
     *
     * @example The domain names from which the tracking task collects data. Separate domain names with commas (,). If you do not specify a domain name, the task collects data from all domain names that belong to your Alibaba Cloud account.
     *
     * @var string
     */
    public $reports;

    /**
     * @description The method that is used to send operations reports. Operations reports are sent to you only by email. The settings must be escaped in JSON.
     *
     * @example **Fields of the Reports parameter**| Field | Type | Required | Description |
     * | conditions | ConDatas[] | No | The filter conditions for the report. |
     **Fields of the conditions parameter**| Field | Type | Required | Description |
     * | field | String | No | The filter fields. |
     * | op | String | No | The filter action. Only **in** is supported. |
     * | value | String[] | No | The array of field values. |
     **Fields of the Deliver parameter**| Field | Type | Required | Description |
     * | to | String[] | Yes | The email addresses to which operations reports are sent. |
     **Fields of the Schedule parameter**| Field | Type | Required | Description |
     * | frequency | String | Yes | The interval at which the reports are sent. Valid values:
     *
     **h**: every hour
     *
     **d**: every day
     *
     **w**: every week |
     * | status | String | No | The status of the tracking task. Valid values:
     *
     **enable**: enabled
     *
     **disable**: disabled |
     * | effectiveEnd | String | No | The end time of the tracking task. |
     * @var string
     */
    public $schedule;
    protected $_name = [
        'deliver'    => 'Deliver',
        'deliverId'  => 'DeliverId',
        'domainName' => 'DomainName',
        'name'       => 'Name',
        'reports'    => 'Reports',
        'schedule'   => 'Schedule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliver) {
            $res['Deliver'] = $this->deliver;
        }
        if (null !== $this->deliverId) {
            $res['DeliverId'] = $this->deliverId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reports) {
            $res['Reports'] = $this->reports;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDcdnDeliverTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deliver'])) {
            $model->deliver = $map['Deliver'];
        }
        if (isset($map['DeliverId'])) {
            $model->deliverId = $map['DeliverId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Reports'])) {
            $model->reports = $map['Reports'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        return $model;
    }
}
