<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListUninstallAegisMachinesRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 4
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The operating system of the server.
     *
     * >  The value of this parameter is the value of the Values parameter that is returned by calling the [DescribeCriteria](~~DescribeCriteria~~) operation. If the value of the **Name** parameter in the response is **osType**, the value of the **Values** parameter indicates an operating system.
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The number of entries to return on each page. Default value: **5**.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region in which the server resides.
     *
     * >  The value of this parameter is the value of the Values parameter that is returned by calling the [DescribeCriteria](~~DescribeCriteria~~) operation. If the value of the **Name** parameter in the response is **regionId**, the value of the **Values** parameter indicates a region ID.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIdStr;

    /**
     * @description The region in which the server resides.
     *
     * >  The value of this parameter is the value of the Values parameter that is returned by calling the [DescribeCriteria](~~DescribeCriteria~~) operation. If the value of the **Name** parameter in the response is **regionId**, the value of the **Values** parameter indicates a region ID.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The information about the server that you want to query. The value can be the name or the public IP address of the server.
     *
     * @example 172.20.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The source IP address of the request.
     *
     * @example 180.113.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The source of the server. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud.
     *   **1**: a third-party cloud server
     *   **2**: a server in a data center
     *   **3**, **4**, **5**, and **7**: other cloud asset
     *   **8**: a lightweight asset
     *
     * @example 0
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'os'          => 'Os',
        'pageSize'    => 'PageSize',
        'regionIdStr' => 'RegionIdStr',
        'regionNo'    => 'RegionNo',
        'remark'      => 'Remark',
        'sourceIp'    => 'SourceIp',
        'vendor'      => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionIdStr) {
            $res['RegionIdStr'] = $this->regionIdStr;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUninstallAegisMachinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionIdStr'])) {
            $model->regionIdStr = $map['RegionIdStr'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
