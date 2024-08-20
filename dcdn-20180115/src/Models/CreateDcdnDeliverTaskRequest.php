<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnDeliverTaskRequest extends Model
{
    /**
     * @description The method that is used to send operations reports. Operations reports are sent to you only by email. The settings must be escaped in JSON.
     *
     * This parameter is required.
     * @example {"email":{"subject":"the email subject","to":["username@example.com","username@example.org"]}}
     *
     * @var string
     */
    public $deliver;

    /**
     * @description The domain names to be tracked. Separate multiple domain names with commas (,). You can specify up to 500 domain names. If you want to specify more than 500 domain names, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     *
     * > If you do not specify a domain name, the tracking task is created for all domain names that belong to your Alibaba Cloud account.
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the tracking task.
     *
     * This parameter is required.
     * @example Domain name report
     *
     * @var string
     */
    public $name;

    /**
     * @description The operations reports that are tracked by the task. The data must be escaped in JSON.
     *
     * This parameter is required.
     * @example [{\\\\"reportId\\\\":2,\\\\"conditions\\\\":[{\\\\"field\\\\":\\\\"prov\\\\",\\\\"op\\\\":\\\\"in\\\\",\\\\"value\\\\":[\\\\"Heilongjiang\\\\",\\\\"Beijing\\\\"]}]}]
     *
     * @var string
     */
    public $reports;

    /**
     * @description The parameters that specify the time interval at which the tracking task sends operations reports. The settings must be escaped in JSON.
     *
     * This parameter is required.
     * @example {"schedName":"the name of the tracking task","description":"the description","crontab":"000\\*\\*?","frequency":"d","status":"enable","effectiveFrom":"2020-09-17T00:00:00Z","effectiveEnd":"2020-11-17T00:00:00Z"}
     *
     * @var string
     */
    public $schedule;
    protected $_name = [
        'deliver'    => 'Deliver',
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
     * @return CreateDcdnDeliverTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deliver'])) {
            $model->deliver = $map['Deliver'];
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
