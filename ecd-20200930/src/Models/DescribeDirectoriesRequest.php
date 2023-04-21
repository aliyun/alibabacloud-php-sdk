<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDirectoriesRequest extends Model
{
    /**
     * @description Details of directory IDs. You can specify one or more directory IDs.
     *
     * @example cn-hangzhou+dir-gx2x1dhsmu52rd****
     *
     * @var string[]
     */
    public $directoryId;

    /**
     * @description The status of the directory. The value of this parameter is the same as the value of the `Status` parameter.
     *
     * @example REGISTERED
     *
     * @var string
     */
    public $directoryStatus;

    /**
     * @description The type of the directory.
     *
     * @example RAM
     *
     * @var string
     */
    public $directoryType;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. If this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the workspace.
     *
     * @example REGISTERED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'directoryId'     => 'DirectoryId',
        'directoryStatus' => 'DirectoryStatus',
        'directoryType'   => 'DirectoryType',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryStatus) {
            $res['DirectoryStatus'] = $this->directoryStatus;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDirectoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            if (!empty($map['DirectoryId'])) {
                $model->directoryId = $map['DirectoryId'];
            }
        }
        if (isset($map['DirectoryStatus'])) {
            $model->directoryStatus = $map['DirectoryStatus'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
