<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainUsageDataRequest extends Model
{
    /**
     * @description The billable region. Default value: CN. Valid values:
     *
     *   **CN**: Chinese mainland
     *   **OverSeas**: outside the Chinese mainland
     *   **AP1**: Asia Pacific 1
     *   **AP2**: Asia Pacific 2
     *   **AP3**: Asia Pacific 3
     *   **NA**: North America
     *   **SA**: South America
     *   **EU**: Europe
     *   **MEAA**: Middle East and Africa
     *   **all**: all the preceding billable regions
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The protocol of the data that you want to query. Default value: all. Valid values:
     *
     *   **http**: HTTP
     *   **https**: HTTPS
     *   **quic**: QUIC
     *   **all**: HTTP, HTTPS, and QUIC
     *
     * @example all
     *
     * @var string
     */
    public $dataProtocol;

    /**
     * @description The accelerated domain name. You can specify up to 100 domain names in each request. Separate multiple domain names with commas (,).
     *
     * > If you leave this parameter empty, the usage data of all accelerated domain names in your Alibaba Cloud account is returned.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query.
     *
     * > The end time must be later than the start time. The maximum time range that can be specified is 31 days.
     * @example 2015-12-10T22:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of data that you want to query. Valid values:
     *
     *   **bps**: bandwidth
     *   **traf**: traffic
     *   **acc**: requests
     *
     * > If you set this parameter to **acc**, the **Area** parameter is not supported.
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @description The time interval between the data entries to return. Unit: seconds. Valid values: **300** (5 minutes), **3600** (1 hour), and **86400** (1 day).
     *
     *   If **Interval** is set to **300**, you can query usage data in the last six months. The maximum time range per query that can be specified is three days.
     *   If **Interval** is set to **3600** or **86400**, you can query usage data of the previous year.
     *   If you do not set the **Interval** parameter, the maximum time range that you can query is one month. If you specify a time range of 1 to 3 days, the time interval between the entries that are returned is 1 hour. If you specify a time range of at least 4 days, the time interval between the entries that are returned is 1 day.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The beginning of the time range to query.
     *
     * > Data is collected every 5 minutes.
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of content that you want to query. Default value: all. Valid values:
     *
     *   **static**: static content
     *   **dynamic**: dynamic content
     *   **all**: both static and dynamic content
     *
     * @example static
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'area'         => 'Area',
        'dataProtocol' => 'DataProtocol',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'field'        => 'Field',
        'interval'     => 'Interval',
        'startTime'    => 'StartTime',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->dataProtocol) {
            $res['DataProtocol'] = $this->dataProtocol;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['DataProtocol'])) {
            $model->dataProtocol = $map['DataProtocol'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
