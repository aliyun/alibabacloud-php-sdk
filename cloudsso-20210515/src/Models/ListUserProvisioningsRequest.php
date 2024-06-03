<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class ListUserProvisioningsRequest extends Model
{
    /**
     * @description The ID of the resource directory.
     *
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The maximum number of entries per page.
     *
     * Default value: 10.
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to initiate the next request. If this is your first time to call this operation, you do not need to specify the `NextToken` parameter.
     *
     * When you call this operation for the first time, if the total number of entries to return is larger than the value of `MaxResults`, the entries are truncated. The system returns entries based on the value of `MaxResults`, and does not return the excess entries. In this case, the value of the response parameter `IsTruncated` is `true`, and `NextToken` is returned. In the next call, you can use the value of `NextToken` and maintain the settings of the other request parameters to query the excess entries. You can repeat the call until the value of `IsTruncated` becomes `false`. This way, all entries are returned.
     * @example 27EbL9j4ZgZjsMZFqbZFgbwQ1VXFU1Khcpx9e2vrW1zwzTBmTGWaM7ixHhRin8SCsxaJdazYVCzeKc2UF2QkyGb83cPhr8ZxrzoaiTd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The identity ID of the RAM user provisioning. Valid values:
     *
     *   If `Group` is returned for the `PrincipalType` parameter, the value of this parameter is the ID of a CloudSSO user group (g-\\*\\*\\*\\*\\*\\*\\*\\*).
     *   If `User` is returned for the `PrincipalType` parameter, the value of this parameter is the ID of a CloudSSO user (u-\\*\\*\\*\\*\\*\\*\\*\\*).
     *
     * @example u-88d73u*****
     *
     * @var string
     */
    public $principalId;

    /**
     * @description The identity type of the RAM user provisioning. Valid values:
     *
     *   User: The identity of the RAM user provisioning is a CloudSSO user.
     *   Group: The identity of the RAM user provisioning is a CloudSSO user group.
     *
     * @example RD-Account
     *
     * @var string
     */
    public $principalType;

    /**
     * @description The ID of the object for which you create the RAM user provisioning. The value is fixed as the ID of the member in the resource directory.
     *
     * @example 1743382******
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The object for which you create the RAM user provisioning. The value is fixed as `RD-Account`.
     *
     * @example User
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'directoryId'   => 'DirectoryId',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'principalId'   => 'PrincipalId',
        'principalType' => 'PrincipalType',
        'targetId'      => 'TargetId',
        'targetType'    => 'TargetType',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserProvisioningsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
