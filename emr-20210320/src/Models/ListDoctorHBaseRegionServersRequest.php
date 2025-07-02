<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ListDoctorHBaseRegionServersRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $regionServerHosts;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dateTime' => 'DateTime',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderBy' => 'OrderBy',
        'orderType' => 'OrderType',
        'regionId' => 'RegionId',
        'regionServerHosts' => 'RegionServerHosts',
    ];

    public function validate()
    {
        if (\is_array($this->regionServerHosts)) {
            Model::validateArray($this->regionServerHosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionServerHosts) {
            if (\is_array($this->regionServerHosts)) {
                $res['RegionServerHosts'] = [];
                $n1 = 0;
                foreach ($this->regionServerHosts as $item1) {
                    $res['RegionServerHosts'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionServerHosts'])) {
            if (!empty($map['RegionServerHosts'])) {
                $model->regionServerHosts = [];
                $n1 = 0;
                foreach ($map['RegionServerHosts'] as $item1) {
                    $model->regionServerHosts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
