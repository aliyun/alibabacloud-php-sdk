<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class UpdateCdnDeliverTaskRequest extends Model
{
    /**
     * @description \[{\\"reportId\\":1,\\"conditions\\":\[{\\"field\\":\\"prov\\",\\"op\\":\\"in\\",\\"value\\":\[\\"Heilongjiang\\",\\"Beijing\\"]}]}]
     *
     * @example The domain name that you want to track. You can specify up to 500 domain names in each request. Separate multiple domain names with commas (,). If you do not specify a domain name, the task collects data from all domain names that belong to your Alibaba Cloud account.
     *
     * @var string
     */
    public $deliver;

    /**
     * @description > You can call this operation up to three times per second per account.
     *
     * @example 3
     *
     * @var int
     */
    public $deliverId;

    /**
     * @description The operations reports that are tracked by the task. The data must be escaped in JSON.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description **Fields in the ReDatas parameter**
     *
     * |conditions|ConDatas\[\]|No|The filter conditions for the report.|
     *
     **Fields in the ConDatas parameter**
     *
     * |value|String\[\]|No|The array of field values.|
     *
     *
     **Fields in the email parameter**
     *
     * |to|String\[\]|Yes|The email addresses to which operations reports are sent.|
     *
     *
     **Fields in the Deliver parameter**
     *
     * |to|String\[\]|Yes|The email addresses to which operations reports are sent.|
     *
     *
     **Fields in the Schedule parameter**
     *
     * |crontab|String|Yes|Specifies the cycle in which the tracking task is scheduled to run.|
     * |frequency|String|Yes|The interval at which the reports are sent. Valid values:<br />**h**: by hour<br />**d**: by day<br />**w**: by week|
     * |status|String|No|The status of the tracking task. Valid values:<br />**enable**<br />**disable**|
     * |effectiveEnd|String|No|The end time of the tracking task.|
     * @example The ID of the tracking task that you want to update.
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the tracking task.
     *
     * @example Domain name report
     *
     * @var string
     */
    public $reports;

    /**
     * @description The method that is used to send operations reports. Operations reports are sent to you only by email. The settings must be escaped in JSON.
     *
     * @example {\\"email\\":{\\"subject\\":\\"The email subject\\",\\"to\\":\[\\"songmingyuan@alibaba-inc.com\\",\\"songmingyuan@alibaba-inc.com\\"]}}"
     *
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
     * @return UpdateCdnDeliverTaskRequest
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
