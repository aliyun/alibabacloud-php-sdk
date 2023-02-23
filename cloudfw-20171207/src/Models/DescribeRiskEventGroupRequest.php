<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeRiskEventGroupRequest extends Model
{
    /**
     * @description The names of attacked applications. Set the value in the `["AttackApp1","AttackApp2"]` format.
     *
     * @example ["MySql","DNS"]
     *
     * @var string[]
     */
    public $attackApp;

    /**
     * @description The attack type of the intrusion events. Valid values:
     *
     *   **1**: suspicious connection
     *   **2**: command execution
     *   **3**: brute-force attack
     *   **4**: scanning
     *   **5**: others
     *   **6**: information leak
     *   **7**: DoS attack
     *   **8**: buffer overflow attack
     *   **9**: web attack
     *   **10**: trojan backdoor
     *   **11**: computer worm
     *   **12**: mining
     *   **13**: reverse shell
     *
     * > If you do not specify this parameter, the intrusion events of all attack types are queried.
     * @example 1
     *
     * @var string
     */
    public $attackType;

    /**
     * @description The edition of Cloud Firewall that you purchase. Valid values:
     *
     *   **2**: Premium Edition
     *   **3**: Enterprise Edition
     *   **4**: Ultimate Edition
     *   **10**: Cloud Firewall that uses the pay-as-you-go billing method
     *
     * @example 10
     *
     * @var int
     */
    public $buyVersion;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The type of the risk events.\
     * Set the value to **session**, which indicates intrusion events.
     * @example session
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The direction of the traffic for the intrusion events. Valid values:
     *
     *   **in**: inbound
     *   **out**: outbound
     *
     * > If you do not specify this parameter, the intrusion events in both inbound and outbound directions are queried.
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The destination IP address to query. If you specify this parameter, all intrusion events with the specified destination IP address are queried.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $dstIP;

    /**
     * @description The ID of the destination VPC.
     *
     * > If the FirewallType parameter is set to VpcFirewall, you must specify this parameter.
     * @example vpc-uf6e9a9zyokj2ywuo****
     *
     * @var string
     */
    public $dstNetworkInstanceId;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1534408267
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the firewall. Valid values:
     *
     *   **VpcFirewall**: virtual private cloud (VPC) firewall
     *   **InternetFirewall**: Internet firewall (default)
     *
     * @example InternetFirewall
     *
     * @var string
     */
    public $firewallType;

    /**
     * @description The language of the content within the request and response. Valid values:
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
     * @description Specifies whether to query the information about the geographical locations of IP addresses.
     *
     *   **true**: does not query the information about the geographical locations of IP addresses.
     *   **false**: queries the information about the geographical locations of IP addresses. This is the default value.
     *
     * @example false
     *
     * @var string
     */
    public $noLocation;

    /**
     * @description The order in which you want to sort the query results. Valid values:
     *
     *   **asc**: the ascending order.
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
     * Default value: **6**. Maximum value: **10**.
     * @example 6
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The status of the firewall. Valid values:
     *
     *   **1**: alerting
     *   **2**: blocking
     *
     * > If you do not specify this parameter, the intrusion events that are detected by firewalls in both states are queried.
     * @example 1
     *
     * @var string
     */
    public $ruleResult;

    /**
     * @description The module of the rule that is used to detect the intrusion events. Valid values:
     *
     *   **1**: basic protection
     *   **2**: virtual patching
     *   **4**: threat intelligence
     *
     * > If you do not specify this parameter, the intrusion events that are detected by using all rules are queried.
     * @example 1
     *
     * @var string
     */
    public $ruleSource;

    /**
     * @description The field based on which the results are sorted. Valid values:
     *
     *   **VulLevel**: The results are sorted based on the risk level field. This is the default value.
     *   **LastTime**: The results are sorted based on the most recent occurrence time.
     *
     * @example LastTime
     *
     * @var string
     */
    public $sort;

    /**
     * @description The source IP address to query. If you specify this parameter, all intrusion events with the specified source IP address are queried.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $srcIP;

    /**
     * @description The ID of the source VPC.
     *
     * > If the FirewallType parameter is set to VpcFirewall, you must specify this parameter.
     * @example vpc-uf6e9a9zyokj2ywuo****
     *
     * @var string
     */
    public $srcNetworkInstanceId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1534408189
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The risk level of the intrusion events. Valid values:
     *
     *   **1**: low
     *   **2**: medium
     *   **3**: high
     *
     * > If you do not specify this parameter, the intrusion events that are at all risk levels are queried.
     * @example 1
     *
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'attackApp'            => 'AttackApp',
        'attackType'           => 'AttackType',
        'buyVersion'           => 'BuyVersion',
        'currentPage'          => 'CurrentPage',
        'dataType'             => 'DataType',
        'direction'            => 'Direction',
        'dstIP'                => 'DstIP',
        'dstNetworkInstanceId' => 'DstNetworkInstanceId',
        'endTime'              => 'EndTime',
        'firewallType'         => 'FirewallType',
        'lang'                 => 'Lang',
        'noLocation'           => 'NoLocation',
        'order'                => 'Order',
        'pageSize'             => 'PageSize',
        'ruleResult'           => 'RuleResult',
        'ruleSource'           => 'RuleSource',
        'sort'                 => 'Sort',
        'srcIP'                => 'SrcIP',
        'srcNetworkInstanceId' => 'SrcNetworkInstanceId',
        'startTime'            => 'StartTime',
        'vulLevel'             => 'VulLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->buyVersion) {
            $res['BuyVersion'] = $this->buyVersion;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }
        if (null !== $this->dstNetworkInstanceId) {
            $res['DstNetworkInstanceId'] = $this->dstNetworkInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->noLocation) {
            $res['NoLocation'] = $this->noLocation;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }
        if (null !== $this->ruleSource) {
            $res['RuleSource'] = $this->ruleSource;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->srcNetworkInstanceId) {
            $res['SrcNetworkInstanceId'] = $this->srcNetworkInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskEventGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackApp'])) {
            if (!empty($map['AttackApp'])) {
                $model->attackApp = $map['AttackApp'];
            }
        }
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
        if (isset($map['BuyVersion'])) {
            $model->buyVersion = $map['BuyVersion'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }
        if (isset($map['DstNetworkInstanceId'])) {
            $model->dstNetworkInstanceId = $map['DstNetworkInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NoLocation'])) {
            $model->noLocation = $map['NoLocation'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }
        if (isset($map['RuleSource'])) {
            $model->ruleSource = $map['RuleSource'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['SrcNetworkInstanceId'])) {
            $model->srcNetworkInstanceId = $map['SrcNetworkInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}
