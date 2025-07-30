<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DescribeOrgsRequest extends Model
{
    /**
     * @description The maximum number of entries to return. Valid values: 1 to 100.\\
     * Default value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. The return value is the value of the NextToken response parameter that was returned last time the DescribeOrgs operation was called.
     *
     * @example AAAAAV3MpHK****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The name of the organization.
     *
     * @example org****
     *
     * @var string
     */
    public $orgName;

    /**
     * @description The parent organization ID.
     *
     * @example org-****
     *
     * @var string
     */
    public $parentOrgId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orgName' => 'OrgName',
        'parentOrgId' => 'ParentOrgId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->parentOrgId) {
            $res['ParentOrgId'] = $this->parentOrgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOrgsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['ParentOrgId'])) {
            $model->parentOrgId = $map['ParentOrgId'];
        }

        return $model;
    }
}
