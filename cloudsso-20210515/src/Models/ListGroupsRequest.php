<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class ListGroupsRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The filter condition.
     *
     * For example, if you set Filter to GroupName sw test, the operation queries the groups whose names start with test. If you set Filter to GroupName eq testgroup, the operation queries the group whose name is testgroup.
     * @example GroupName eq testgroup
     *
     * @var string
     */
    public $filter;

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
     * @description The token to return for the next page. If this is your first time to call this operation, you do not need to specify `NextToken`.
     *
     * When you call this operation for the first time, if the total number of entries to return exceeds the value of `MaxResults`, the entries are truncated. Only the entries that match the value of `MaxResults` are returned, and the excess entries are not returned. In this case, the value of the response parameter `IsTruncated` is `true`, and `NextToken` is returned. In the next call, you can use the value of `NextToken` and maintain the settings of the other request parameters to query the excess entries. You can repeat the call until the value of `IsTruncated` becomes `false`. This way, all entries are returned.
     * @example K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The type of the group. The type can be used to filter groups. Valid values:
     *
     *   Manual: The group is manually created.
     *   Synchronized: The group is synchronized from an external identity provider (IdP).
     *
     * @example Manual
     *
     * @var string
     */
    public $provisionType;
    protected $_name = [
        'directoryId'   => 'DirectoryId',
        'filter'        => 'Filter',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'provisionType' => 'ProvisionType',
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
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->provisionType) {
            $res['ProvisionType'] = $this->provisionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProvisionType'])) {
            $model->provisionType = $map['ProvisionType'];
        }

        return $model;
    }
}
