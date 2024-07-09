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
     * @description The directory status. This parameter is equivalent to `Status`.
     *
     * @example REGISTERED
     *
     * @var string
     */
    public $directoryStatus;

    /**
     * @description The directory type.
     *
     * Valid values:
     *
     *   SIMPLE: a directory of the convenience account type
     *   AD_CONNECTOR: an AD directory
     *   RAM: a RAM directory
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
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The directory status.
     *
     * Valid values:
     *
     *   REGISTERING: The directory is being registered.
     *
     * <!-- -->
     *
     *   DEREGISTERING: The directory is being deregistered.
     *
     * <!-- -->
     *
     *   REGISTERED: The directory is registered.
     *
     * <!-- -->
     *
     *   NEEDCONFIGTRUST: A trust relationship needs to be configured for the directory.
     *
     * <!-- -->
     *
     *   CONFIGTRUSTFAILED: A trust relationship fails to be configured for the directory.
     *
     * <!-- -->
     *
     *   DEREGISTERED: The directory is deregistered.
     *
     * <!-- -->
     *
     *   ERROR: One or more configurations of the directory are invalid.
     *
     * <!-- -->
     *
     *   CONFIGTRUSTING: A trust relationship is being configured.
     *
     * <!-- -->
     *
     *   NEEDCONFIGUSER: Users need to be configured for the directory.
     *
     * <!-- -->
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
