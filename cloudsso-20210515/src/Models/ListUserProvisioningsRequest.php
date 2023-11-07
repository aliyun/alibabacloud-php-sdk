<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class ListUserProvisioningsRequest extends Model
{
    /**
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 27EbL9j4ZgZjsMZFqbZFgbwQ1VXFU1Khcpx9e2vrW1zwzTBmTGWaM7ixHhRin8SCsxaJdazYVCzeKc2UF2QkyGb83cPhr8ZxrzoaiTd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example u-88d73u*****
     *
     * @var string
     */
    public $principalId;

    /**
     * @example RD-Account
     *
     * @var string
     */
    public $principalType;

    /**
     * @example 1743382******
     *
     * @var string
     */
    public $targetId;

    /**
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
