<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainUsageDataRequest extends Model
{
    /**
     * @description The ID of the billable region. Valid values:
     *
     *   **CN** (default): the Chinese mainland
     *   **OverSeas**: outside the Chinese mainland
     *   **AP1**: Asia Pacific 1
     *   **AP2**: Asia Pacific 2
     *   **AP3**: Asia Pacific 3
     *   **NA**: North America
     *   **SA**: South America
     *   **EU**: Europe
     *   **MEAA**: Middle East and Africa
     *   **all**: all billable regions
     *
     * >  For more information about billable regions, see [Billable regions](~~142221~~).
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The protocol by which the data is queried. Valid values:
     *
     *   **http**: HTTP
     *   **https**: HTTPS
     *   **quic**: QUIC
     *   **all** (default): HTTP, HTTPS, and QUIC
     *
     * @example all
     *
     * @var string
     */
    public $dataProtocol;

    /**
     * @description The accelerated domain name. You can query the resource usage data for a maximum of 100 domain names in each call. Separate domain names with commas (,).
     *
     * >  If you do not set this parameter, the usage data of all accelerated domain names within your Alibaba Cloud account is returned.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query.
     *
     * >  The end time must be later than the start time. The maximum time range that can be queried is 31 days.
     * @example 2015-12-10T22:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of data to be queried. Valid values:
     *
     *   **bps**: bandwidth
     *   **traf**: network traffic
     *   **acc**: requests
     *
     * >  **acc** does not support the **Area** parameter.
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @description The time interval between the data entries. Unit: seconds.
     *
     * The time granularity varies with the time range to query. Supported values: 300 (5 minutes), 3600 (1 hour), and 86400 (1 day). For more information, see **Usage notes**.
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The beginning of the time range to query.
     *
     * >  The data is collected every 5 minutes.
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of content based on which the data is queried. Valid values:
     *
     *   **static**: static content
     *   **dynamic**: dynamic content
     *   **all** (default): both static and dynamic content
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
        'ownerId'      => 'OwnerId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
