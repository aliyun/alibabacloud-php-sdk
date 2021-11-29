<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class SearchLogRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $fromTimestamp;

    /**
     * @var string
     */
    public $hostInnerIp;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $line;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var string
     */
    public $slsQueryString;

    /**
     * @var int
     */
    public $toTimestamp;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'fromTimestamp'   => 'FromTimestamp',
        'hostInnerIp'     => 'HostInnerIp',
        'hostName'        => 'HostName',
        'line'            => 'Line',
        'logstoreName'    => 'LogstoreName',
        'offset'          => 'Offset',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'reverse'         => 'Reverse',
        'slsQueryString'  => 'SlsQueryString',
        'toTimestamp'     => 'ToTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->fromTimestamp) {
            $res['FromTimestamp'] = $this->fromTimestamp;
        }
        if (null !== $this->hostInnerIp) {
            $res['HostInnerIp'] = $this->hostInnerIp;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->slsQueryString) {
            $res['SlsQueryString'] = $this->slsQueryString;
        }
        if (null !== $this->toTimestamp) {
            $res['ToTimestamp'] = $this->toTimestamp;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['FromTimestamp'])) {
            $model->fromTimestamp = $map['FromTimestamp'];
        }
        if (isset($map['HostInnerIp'])) {
            $model->hostInnerIp = $map['HostInnerIp'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['SlsQueryString'])) {
            $model->slsQueryString = $map['SlsQueryString'];
        }
        if (isset($map['ToTimestamp'])) {
            $model->toTimestamp = $map['ToTimestamp'];
        }

        return $model;
    }
}
