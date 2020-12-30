<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class SearchLogRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hostInnerIp;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var int
     */
    public $fromTimestamp;

    /**
     * @var int
     */
    public $toTimestamp;

    /**
     * @var string
     */
    public $slsQueryString;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $line;

    /**
     * @var bool
     */
    public $reverse;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'clusterId'       => 'ClusterId',
        'hostInnerIp'     => 'HostInnerIp',
        'hostName'        => 'HostName',
        'logstoreName'    => 'LogstoreName',
        'fromTimestamp'   => 'FromTimestamp',
        'toTimestamp'     => 'ToTimestamp',
        'slsQueryString'  => 'SlsQueryString',
        'offset'          => 'Offset',
        'line'            => 'Line',
        'reverse'         => 'Reverse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostInnerIp) {
            $res['HostInnerIp'] = $this->hostInnerIp;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }
        if (null !== $this->fromTimestamp) {
            $res['FromTimestamp'] = $this->fromTimestamp;
        }
        if (null !== $this->toTimestamp) {
            $res['ToTimestamp'] = $this->toTimestamp;
        }
        if (null !== $this->slsQueryString) {
            $res['SlsQueryString'] = $this->slsQueryString;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostInnerIp'])) {
            $model->hostInnerIp = $map['HostInnerIp'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }
        if (isset($map['FromTimestamp'])) {
            $model->fromTimestamp = $map['FromTimestamp'];
        }
        if (isset($map['ToTimestamp'])) {
            $model->toTimestamp = $map['ToTimestamp'];
        }
        if (isset($map['SlsQueryString'])) {
            $model->slsQueryString = $map['SlsQueryString'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }

        return $model;
    }
}
