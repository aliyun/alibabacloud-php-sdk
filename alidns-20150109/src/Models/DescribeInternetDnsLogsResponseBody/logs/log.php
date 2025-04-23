<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponseBody\logs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponseBody\logs\log\value;

class log extends Model
{
    /**
     * @var string
     */
    public $dnsMsgId;

    /**
     * @var int
     */
    public $logTime;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $queryName;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var int
     */
    public $rt;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $status;

    /**
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

    public function validate()
    {
        if (null !== $this->value) {
            $this->value->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Value'] = null !== $this->value ? $this->value->toArray($noStream) : $this->value;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
