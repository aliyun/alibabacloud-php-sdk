<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsRequest\filters;
use AlibabaCloud\Tea\Model;

class DescribeFilesetsRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     *   The IDs of CPFS file systems must start with `cpfs-`. Example: cpfs-099394bd928c\\*\\*\\*\\*.
     *   The IDs of CPFS for LINGJUN file systems must start with `bmcpfs-`. Example: bmcpfs-290w65p03ok64ya\\*\\*\\*\\*.
     *
     * >  CPFS is not supported on the international site.
     *
     * This parameter is required.
     *
     * @example bmcpfs-290w65p03ok64ya****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The filter that is used to query filesets.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The number of results for each query.
     *
     * Valid values: 10 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The condition by which the results are sorted. Valid values:
     *
     *   FileCountLimit: the file quantity quota
     *   SizeLimit: the capacity quota
     *   FileCountUsage: the usage of the file quantity quota
     *   SpaceUsage: the capacity usage
     *
     * @example FileCountLimit
     *
     * @var string
     */
    public $orderByField;

    /**
     * @description The order in which you want to sort the results. Valid values:
     *
     *   asc (default): ascending order
     *   desc: descending order
     *
     * >  This parameter takes effect only if you specify the OrderByField parameter.
     *
     * @example asc
     *
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'filters' => 'Filters',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderByField' => 'OrderByField',
        'sortOrder' => 'SortOrder',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderByField) {
            $res['OrderByField'] = $this->orderByField;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFilesetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderByField'])) {
            $model->orderByField = $map['OrderByField'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
