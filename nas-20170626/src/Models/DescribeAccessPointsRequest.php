<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccessPointsRequest extends Model
{
    /**
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroup;

    /**
     * @example 174494****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example MTY4NzcxOTcwMjAzMDk2Nzc0MyM4MDM4****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'accessGroup'  => 'AccessGroup',
        'fileSystemId' => 'FileSystemId',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = $this->accessGroup;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessPointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
