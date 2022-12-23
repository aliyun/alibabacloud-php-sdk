<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainUsageDataRequest extends Model
{
    /**
     * @description The region where the data is queried. The default value is CN, which indicates mainland China. Valid values:
     *
     *   **CN**: mainland China.
     *   **OverSeas**: outside mainland China.
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The domain name for CDN. If you do not specify this parameter, the merged data of all your domain names for CDN is returned. You can specify multiple domain names. Separate them with commas (,).
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2015-12-10T12:20:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the data to be queried. Valid values:
     *
     *   **bps**: bandwidth.
     *   **traf**: traffic.
     *
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2015-12-10T10:20:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the content based on which the data is generated. Valid values:
     *
     *   **static**
     *   **dynamic**
     *   **all**
     *
     * @example static
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'area'       => 'Area',
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'field'      => 'Field',
        'ownerId'    => 'OwnerId',
        'startTime'  => 'StartTime',
        'type'       => 'Type',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
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
     * @return DescribeVodDomainUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
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
