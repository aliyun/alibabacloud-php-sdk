<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListBasicAccelerateIpsRequest extends Model
{
    /**
     * @var string
     */
    public $accelerateIpAddress;

    /**
     * @var string
     */
    public $accelerateIpId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ipSetId;

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
    public $regionId;
    protected $_name = [
        'accelerateIpAddress' => 'AccelerateIpAddress',
        'accelerateIpId'      => 'AccelerateIpId',
        'clientToken'         => 'ClientToken',
        'ipSetId'             => 'IpSetId',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpAddress) {
            $res['AccelerateIpAddress'] = $this->accelerateIpAddress;
        }
        if (null !== $this->accelerateIpId) {
            $res['AccelerateIpId'] = $this->accelerateIpId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBasicAccelerateIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpAddress'])) {
            $model->accelerateIpAddress = $map['AccelerateIpAddress'];
        }
        if (isset($map['AccelerateIpId'])) {
            $model->accelerateIpId = $map['AccelerateIpId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
