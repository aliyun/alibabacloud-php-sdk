<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeOutgoingDestinationIPRequest extends Model
{
    /**
     * @description The type of the applications that the access control policy supports. Valid values:
     *
     * - **FTP**
     * - **HTTP**
     * - **HTTPS**
     * - **MySQL**
     * - **SMTP**
     * - **SMTPS**
     * - **RDP**
     * - **VNC**
     * - **SSH**
     * - **Redis**
     * - **MQTT**
     * - **MongoDB**
     * - **Memcache**
     * - **SSL**
     * - **ANY**: all types of applications
     * @example FTP
     *
     * @var string
     */
    public $applicationName;

    /**
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
     * @description The destination IP address in the outbound connection that is initiated to access a domain name.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $dstIP;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1656923760
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language of the content within the response. Valid values:
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
     * @description The field based on which you want to sort the queried information. Valid values:
     *
     *   **SessionCount**: the number of requests. This is the default value.
     *   **InBytes**: the inbound traffic.
     *   **OutBytes**: the outbound traffic.
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 6. Maximum value: 10.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The port number.
     *
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The private IP address of the ECS instance that initiates the outbound connection.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIP;

    /**
     * @description The public IP address of the Elastic Compute Service (ECS) instance that initiates the outbound connection.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $publicIP;

    /**
     * @description The order in which you want to sort the queried information. Valid values:
     *
     *   **asc**: the ascending order
     *   **desc**: the descending order
     *
     * @example SessionCount
     *
     * @var string
     */
    public $sort;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1656837360
     *
     * @var string
     */
    public $startTime;

    /**
     * @example AliYun
     *
     * @var string
     */
    public $tagIdNew;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'categoryId'      => 'CategoryId',
        'currentPage'     => 'CurrentPage',
        'dstIP'           => 'DstIP',
        'endTime'         => 'EndTime',
        'lang'            => 'Lang',
        'order'           => 'Order',
        'pageSize'        => 'PageSize',
        'port'            => 'Port',
        'privateIP'       => 'PrivateIP',
        'publicIP'        => 'PublicIP',
        'sort'            => 'Sort',
        'startTime'       => 'StartTime',
        'tagIdNew'        => 'TagIdNew',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
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
     * @return DescribeOutgoingDestinationIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
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
