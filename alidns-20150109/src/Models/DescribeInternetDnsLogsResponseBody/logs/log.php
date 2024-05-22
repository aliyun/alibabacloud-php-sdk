<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponseBody\logs;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponseBody\logs\log\value;
use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @example 3583
     *
     * @var string
     */
    public $dnsMsgId;

    /**
     * @example 1709196249000
     *
     * @var int
     */
    public $logTime;

    /**
     * @example example.com
     *
     * @var string
     */
    public $queryName;

    /**
     * @example A
     *
     * @var string
     */
    public $queryType;

    /**
     * @example 0
     *
     * @var int
     */
    public $rt;

    /**
     * @example 140.205.XX.XX
     *
     * @var string
     */
    public $serverIp;

    /**
     * @example 59.82.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example NOERROR
     *
     * @var string
     */
    public $status;

    /**
     * @example 170.33.XX.XX
     *
     * @var string
     */
    public $subnetIp;

    /**
     * @var value
     */
    public $value;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'dnsMsgId'  => 'DnsMsgId',
        'logTime'   => 'LogTime',
        'queryName' => 'QueryName',
        'queryType' => 'QueryType',
        'rt'        => 'Rt',
        'serverIp'  => 'ServerIp',
        'sourceIp'  => 'SourceIp',
        'status'    => 'Status',
        'subnetIp'  => 'SubnetIp',
        'value'     => 'Value',
        'zoneName'  => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsMsgId) {
            $res['DnsMsgId'] = $this->dnsMsgId;
        }
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
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
