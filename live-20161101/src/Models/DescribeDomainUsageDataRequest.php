<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainUsageDataRequest extends Model
{
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
     *   **all**: all regions
     *
     * >  If you do not specify this parameter, the default value CN is used. Alibaba Cloud supports the following countries and regions outside the Chinese mainland: - Asia Pacific 1: Hong Kong (China), Macao (China), Taiwan (China), Japan, and Southeast Asia excluding Vietnam and Indonesia. - Asia Pacific 2: Indonesia, South Korea, and Vietnam. - Asia Pacific 3: Australia and New Zealand. - North America: US and Canada. - South America: Brazil. Europe: Ukraine, UK, France, Netherlands, Spain, Italy, Sweden, and Germany. - Middle East and Africa: South Africa, Oman, UAE, and Kuwait.
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The protocol of the data to query. Valid values:
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
     * @description The domain name.
     *
     *   You can query one or more domain names. If you specify multiple domain names, separate them with commas (,).
     *   If you leave this parameter empty, the data of all domain names within your Alibaba Cloud account is returned.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * The end time must be later than the start time. The maximum time range that you can specify is **31** days.
     *
     * This parameter is required.
     *
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The category of the resource usage data to query. Valid values:
     *
     *   **bps**: streaming bandwidth
     *   **traf**: streaming traffic
     *   **req_traf**: stream ingest traffic if you set Type to push, or stream relay traffic if you set Type to push_proxy
     *   **req_bps**: stream ingest bandwidth if you set Type to push, or stream relay bandwidth if you set Type to push_proxy
     *
     * This parameter is required.
     *
     * @example traf
     *
     * @var string
     */
    public $field;

    /**
     * @description The time interval between the data entries to return. Unit: seconds. Valid values: **300** (5 minutes), **3600** (1 hour), and **86400** (1 day).
     *
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
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the resource usage data to query.
     *
     * Valid values if you set **Field** to **bps** or **traf**:
     *
     *   **rts**: bandwidth or traffic for Real-Time Streaming (RTS)
     *   **quic**: bandwidth or traffic for QUIC
     *   **all**: all bandwidth or traffic
     *
     * Valid values if you set **Field** to **req_traf** or **req_bps**:
     *
     *   **push**: stream ingest bandwidth or traffic
     *   **push_proxy**: stream relay bandwidth or traffic
     *
     * @example all
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'area' => 'Area',
        'dataProtocol' => 'DataProtocol',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'field' => 'Field',
        'interval' => 'Interval',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'type' => 'Type',
    ];

    public function validate() {}

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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
