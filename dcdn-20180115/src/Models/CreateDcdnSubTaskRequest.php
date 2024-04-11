<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnSubTaskRequest extends Model
{
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
     * @description The IDs of the metrics that you want to include in the report. Separate multiple IDs with commas (,). Valid values:
     *
     *   **2**: Popular URLs by Request
     *   **4**: Popular URLs by Traffic
     *   **6**: Popular Referer by Request
     *   **8**: Popular Referer by Traffic
     *   **10**: Popular Back-to-origin URLs by Request
     *   **12**: Popular Back-to-origin URLs by Traffic
     *   **14**: Top Client IPs by Request
     *   **16**: Top Client IPs by Traffic
     *   **18**: Popular Domain Names by Traffic
     *   **20**: PV/UV
     *   **22**: Visit Distribution by Region
     *   **24**: Distribution of ISPs
     *   **26**: Peak IPv4/IPv6 Bandwidth
     *   **27**: Back-to-origin bandwidth
     *
     * @example 2,4,6
     *
     * @var string
     */
    public $reportIds;
    protected $_name = [
        'domainName' => 'DomainName',
        'reportIds'  => 'ReportIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->reportIds) {
            $res['ReportIds'] = $this->reportIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnSubTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ReportIds'])) {
            $model->reportIds = $map['ReportIds'];
        }

        return $model;
    }
}
