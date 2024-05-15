<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeOutgoingDomainRequest extends Model
{
    /**
     * @description The type of the service. This parameter is empty by default. Valid values:
     *
     *   **All**: all services
     *   **RiskDomain**: risky domain names
     *   **RiskIP**: risky IP addresses
     *   **AliYun**: Alibaba Cloud services
     *   **NotAliYun**: third-party services
     *
     * @example All
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The domain name in outbound connections.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     * @example 1656750960
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language of the content within the request. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The method that is used to sort the results. Valid values:
     *
     *   **asc**: the ascending order.
     *   **desc** (default): the descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 6. Maximum value: 100.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The public IP address of the Elastic Compute Service (ECS) instance that initiates outbound connections.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $publicIP;

    /**
     * @description The field based on which you want to sort the query results. Valid values:
     *
     *   **SessionCount** (default): the number of requests.
     *   **TotalBytes**: the total volume of traffic.
     *
     * @example SessionCount
     *
     * @var string
     */
    public $sort;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     * @example 1656664560
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tag. Valid values:
     *
     *   **AliYun**: Alibaba Cloud service
     *   **RiskDomain**: risky domain name
     *   **RiskIP**: risky IP address
     *   **TrustedDomain**: trusted website
     *   **AliPay**: Alipay
     *   **DingDing**: DingTalk
     *   **WeChat**: WeChat
     *   **QQ**: Tencent QQ
     *   **SecurityService**: security service
     *   **Microsoft**: Microsoft
     *   **Amazon**: Amazon Web Services (AWS)
     *   **Pan**: cloud disk
     *   **Map**: map
     *   **Code**: code hosting
     *   **SystemService**: system service
     *   **Taobao**: Taobao
     *   **Google**: Google
     *   **ThirdPartyService**: third-party service
     *   **FirstFlow**: the first time when an outbound connection is initiated
     *   **Downloader**: malicious download
     *   **Alexa Top1M**: popular website
     *   **Miner**: mining pool
     *   **Intelligence**: threat intelligence
     *   **DDoS**: DDoS trojan
     *   **Ransomware**: ransomware
     *   **Spyware**: spyware
     *   **Rogue**: rogue software
     *   **Botnet**: botnet
     *   **Suspicious**: suspicious website
     *   **C\\&C**: command and control (C\\&C)
     *   **Gang**: gang
     *   **CVE**: Common Vulnerabilities and Exposures (CVE)
     *   **Backdoor**: webshell
     *   **Phishing**: phishing website
     *   **APT**: advanced persistent threat (APT) attack
     *   **Supply Chain Attack**: supply chain attack
     *   **Malicious software**: malware
     *
     * @example AliYun
     *
     * @var string
     */
    public $tagIdNew;
    protected $_name = [
        'categoryId'  => 'CategoryId',
        'currentPage' => 'CurrentPage',
        'domain'      => 'Domain',
        'endTime'     => 'EndTime',
        'lang'        => 'Lang',
        'order'       => 'Order',
        'pageSize'    => 'PageSize',
        'publicIP'    => 'PublicIP',
        'sort'        => 'Sort',
        'startTime'   => 'StartTime',
        'tagIdNew'    => 'TagIdNew',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tagIdNew) {
            $res['TagIdNew'] = $this->tagIdNew;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOutgoingDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TagIdNew'])) {
            $model->tagIdNew = $map['TagIdNew'];
        }

        return $model;
    }
}
