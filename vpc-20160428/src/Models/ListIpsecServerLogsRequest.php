<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListIpsecServerLogsRequest extends Model
{
    /**
     * @description The beginning of the time range to query. The value must be a UNIX timestamp. For example, 1671003744 specifies 15:42:24 (UTC+8) on December 14, 2022.
     *
     * >  If you specify **From**, you must also specify **To** or **MinutePeriod**.
     * @example 1671003744
     *
     * @var int
     */
    public $from;

    /**
     * @description The ID of the IPsec server.
     *
     * @example iss-2zei2n5q5zhirfh73****
     *
     * @var string
     */
    public $ipsecServerId;

    /**
     * @description The interval at which log data is queried. Valid values: **1** to **10**. Unit: minutes.
     *
     * >  If both **From** and **To** are not specified, you must specify **MinutePeriod**.
     * @example 10
     *
     * @var int
     */
    public $minutePeriod;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region where the IPsec server is created.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to obtain the region ID.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The end of the time range to query. The value must be a unix timestamp. For example, 1671004344 specifies 15:52:24 (UTC+8) on December 14, 2022.
     *
     * >  If you specify **To**, you must also specify **From** or **MinutePeriod**.
     * @example 1671004344
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'from'          => 'From',
        'ipsecServerId' => 'IpsecServerId',
        'minutePeriod'  => 'MinutePeriod',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'regionId'      => 'RegionId',
        'to'            => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->ipsecServerId) {
            $res['IpsecServerId'] = $this->ipsecServerId;
        }
        if (null !== $this->minutePeriod) {
            $res['MinutePeriod'] = $this->minutePeriod;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpsecServerLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['IpsecServerId'])) {
            $model->ipsecServerId = $map['IpsecServerId'];
        }
        if (isset($map['MinutePeriod'])) {
            $model->minutePeriod = $map['MinutePeriod'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
