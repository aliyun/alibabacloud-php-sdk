<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainUsageDataRequest extends Model
{
    /**
     * @description The type of data that you want to query. Valid values:
     *
     *   **bps**: bandwidth
     *   **traf**: traffic
     *   **acc**: requests
     *
     * > If the value is set to **acc**, the **Area** parameter is not supported.
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The billable region. Valid values:
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
     * Default value: **CN**
     * @example all
     *
     * @var string
     */
    public $dataProtocol;

    /**
     * @description domainName
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > The minimum time granularity at which the data is queried is 5 minutes.
     * @example 2015-12-10T22:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > The end time must be later than the start time. The maximum time range that can be queried is 31 days.
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @description The protocol of the data that you want query. Valid values:
     *
     *   **quic**: Quick UDP Internet Connections (QUIC)
     *   **https**: HTTPS
     *   **http**: HTTP
     *   **all**: HTTP, HTTPS, and QUIC
     *
     * Default value: **all**
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The accelerated domain name. You can specify up to 100 domain names in each request. Separate multiple domain names with commas (,).
     *
     * > If you do not specify this parameter, the usage data of all accelerated domain names that belong to your Alibaba Cloud account is returned.
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
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
     * @return DescribeDcdnDomainUsageDataRequest
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
