<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeOutgoingDomainRequest extends Model
{
    /**
     * @description The ID of the product category. Default value: empty. Valid values:
     *
     * -  **All**: All categories.
     * - **RiskDomain**: Risk domain name category.
     * - **RiskIP**: Risk IP category.
     * - **AliYun**: Cloud product category.
     * - **NotAliYun**: Non-Cloud products.
     * @example All
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
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
     * @description The order in which you want to sort the queried information. Valid values:
     *
     *   **asc**: the ascending order
     *   **desc**: the descending order. This is the default value.
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
     * @description The public IP address of the Elastic Compute Service (ECS) instance that initiates the outbound connection.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $publicIP;

    /**
     * @description The field based on which you want to sort the queried information. Valid values:
     *
     *   **SessionCount**: the number of requests. This is the default value.
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
     * @example 1656664560
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 情报标签ID。取值：
     *
     * - **AliYun**：Alibaba cloud products.
     * - **RiskDomain**：The risk domain.
     * - **RiskIP**: The risk IP.
     * - **TrustedDomain**：The trusted domain.
     * - **AliPay**：Alipay
     * - **DingDing**：Ding talk.
     * - **WeChat**：Wechat.
     * - **QQ**：Tencent QQ.
     * - **SecurityService**：The security service.
     * - **Microsoft**：The Microsoft.
     * - **Amazon**：Amazon.
     * - **Pan**：Pan.
     * - **Map**：Map.
     * - **Code**：Code hosting
     * - **SystemService**：System service.
     * - **Taobao**：Taobao.
     * - **Google**：Google.
     * - **ThirdPartyService**：The third party service.
     * - **FirstFlow**：首次
     * - **Downloader**：恶意下载
     * - **Alexa Top1M**：热门网站
     * - **Miner**：矿池
     * - **Intelligence**：威胁情报
     * - **DDoS**：DDoS木马
     * - **Ransomware**：勒索软件
     * - **Spyware**：间谍软件
     * - **Rogue**：流氓软件
     * - **Botnet**：僵尸网络
     * - **Suspicious**：可疑网站
     * - **C&C**：远控
     * - **Gang**：团伙
     * - **CVE**：漏洞CVE
     * - **Backdoor**：木马后门
     * - **Phishing**：钓鱼网站
     * - **APT**：APT攻击
     * - **Supply Chain Attack**：供应链攻击
     * - **Malicious software**：恶意软件
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
