<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudDriveServiceRequest extends Model
{
    /**
     * @var string[]
     */
    public $cdsIds;

    /**
     * @var bool
     */
    public $isTokenNeeded;

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
        'cdsIds'        => 'CdsIds',
        'isTokenNeeded' => 'IsTokenNeeded',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsIds) {
            $res['CdsIds'] = $this->cdsIds;
        }
        if (null !== $this->isTokenNeeded) {
            $res['IsTokenNeeded'] = $this->isTokenNeeded;
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
     * @return DescribeCloudDriveServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsIds'])) {
            if (!empty($map['CdsIds'])) {
                $model->cdsIds = $map['CdsIds'];
            }
        }
        if (isset($map['IsTokenNeeded'])) {
            $model->isTokenNeeded = $map['IsTokenNeeded'];
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
