<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponseBody\logs;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponseBody\logs\log\value;
use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @description Parse log ID (can be duplicated).
     *
     * @example 3583
     *
     * @var string
     */
    public $dnsMsgId;

    /**
     * @description Parse timestamp.
     *
     * @example 1709196249000
     *
     * @var int
     */
    public $logTime;

    /**
     * @description The protocol type of the domain name resolution query request:
     * - UDP
     * - TCP
     * - HTTP
     * - HTTPS
     * - DOH
     *
     * @example UDP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The domain name for which you want to query Domain Name System (DNS) records.
     *
     * @example example.com
     *
     * @var string
     */
    public $queryName;

    /**
     * @description Record type.
     *
     * @example A
     *
     * @var string
     */
    public $queryType;

    /**
     * @description Parse response time.
     *
     * @example 0
     *
     * @var int
     */
    public $rt;

    /**
     * @description Parse server IP.
     *
     * @example 140.205.XX.XX
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description Source IP address.
     *
     * @example 59.82.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description Response status.
     *
     * @example NOERROR
     *
     * @var string
     */
    public $status;

    /**
     * @description The value set for the edns-client-subnet option.
     *
     * @example 170.33.XX.XX
     *
     * @var string
     */
    public $subnetIp;

    /**
     * @description Array of parsing results.
     *
     * @var value
     */
    public $value;

    /**
     * @description The zone name.
     *
     * @example example.com
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'dnsMsgId' => 'DnsMsgId',
        'logTime' => 'LogTime',
        'protocol' => 'Protocol',
        'queryName' => 'QueryName',
        'queryType' => 'QueryType',
        'rt' => 'Rt',
        'serverIp' => 'ServerIp',
        'sourceIp' => 'SourceIp',
        'status' => 'Status',
        'subnetIp' => 'SubnetIp',
        'value' => 'Value',
        'zoneName' => 'ZoneName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsMsgId) {
            $res['DnsMsgId'] = $this->dnsMsgId;
        }
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->queryName) {
            $res['QueryName'] = $this->queryName;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subnetIp) {
            $res['SubnetIp'] = $this->subnetIp;
        }
        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toMap() : null;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return log
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsMsgId'])) {
            $model->dnsMsgId = $map['DnsMsgId'];
        }
        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['QueryName'])) {
            $model->queryName = $map['QueryName'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubnetIp'])) {
            $model->subnetIp = $map['SubnetIp'];
        }
        if (isset($map['Value'])) {
            $model->value = value::fromMap($map['Value']);
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
