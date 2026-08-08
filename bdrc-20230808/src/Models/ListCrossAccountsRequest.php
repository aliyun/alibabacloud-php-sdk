<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListCrossAccountsRequest extends Model
{
    /**
     * @var int
     */
    public $crossAccountOwnerId;

    /**
     * @var string
     */
    public $managementMode;

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
    public $targetId;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'crossAccountOwnerId' => 'CrossAccountOwnerId',
        'managementMode' => 'ManagementMode',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'targetId' => 'TargetId',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossAccountOwnerId) {
            $res['CrossAccountOwnerId'] = $this->crossAccountOwnerId;
        }

        if (null !== $this->managementMode) {
            $res['ManagementMode'] = $this->managementMode;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossAccountOwnerId'])) {
            $model->crossAccountOwnerId = $map['CrossAccountOwnerId'];
        }

        if (isset($map['ManagementMode'])) {
            $model->managementMode = $map['ManagementMode'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
