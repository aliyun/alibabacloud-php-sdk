<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListProtectionPolicyApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $applyStatus;

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
    public $resourceType;

    /**
     * @var string
     */
    public $subProtectionPolicyType;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'applyStatus' => 'ApplyStatus',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceType' => 'ResourceType',
        'subProtectionPolicyType' => 'SubProtectionPolicyType',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyStatus) {
            $res['ApplyStatus'] = $this->applyStatus;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->subProtectionPolicyType) {
            $res['SubProtectionPolicyType'] = $this->subProtectionPolicyType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ApplyStatus'])) {
            $model->applyStatus = $map['ApplyStatus'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SubProtectionPolicyType'])) {
            $model->subProtectionPolicyType = $map['SubProtectionPolicyType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
