<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListResourceServerScopesRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $authorizationType;

    /**
     * @var string
     */
    public $instanceId;

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
    public $previousToken;

    /**
     * @var string[]
     */
    public $resourceServerScopeIds;

    /**
     * @var string
     */
    public $resourceServerScopeName;

    /**
     * @var string
     */
    public $resourceServerScopeType;

    /**
     * @var string
     */
    public $resourceServerScopeValue;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'authorizationType' => 'AuthorizationType',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'previousToken' => 'PreviousToken',
        'resourceServerScopeIds' => 'ResourceServerScopeIds',
        'resourceServerScopeName' => 'ResourceServerScopeName',
        'resourceServerScopeType' => 'ResourceServerScopeType',
        'resourceServerScopeValue' => 'ResourceServerScopeValue',
    ];

    public function validate()
    {
        if (\is_array($this->resourceServerScopeIds)) {
            Model::validateArray($this->resourceServerScopeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->previousToken) {
            $res['PreviousToken'] = $this->previousToken;
        }

        if (null !== $this->resourceServerScopeIds) {
            if (\is_array($this->resourceServerScopeIds)) {
                $res['ResourceServerScopeIds'] = [];
                $n1 = 0;
                foreach ($this->resourceServerScopeIds as $item1) {
                    $res['ResourceServerScopeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceServerScopeName) {
            $res['ResourceServerScopeName'] = $this->resourceServerScopeName;
        }

        if (null !== $this->resourceServerScopeType) {
            $res['ResourceServerScopeType'] = $this->resourceServerScopeType;
        }

        if (null !== $this->resourceServerScopeValue) {
            $res['ResourceServerScopeValue'] = $this->resourceServerScopeValue;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PreviousToken'])) {
            $model->previousToken = $map['PreviousToken'];
        }

        if (isset($map['ResourceServerScopeIds'])) {
            if (!empty($map['ResourceServerScopeIds'])) {
                $model->resourceServerScopeIds = [];
                $n1 = 0;
                foreach ($map['ResourceServerScopeIds'] as $item1) {
                    $model->resourceServerScopeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceServerScopeName'])) {
            $model->resourceServerScopeName = $map['ResourceServerScopeName'];
        }

        if (isset($map['ResourceServerScopeType'])) {
            $model->resourceServerScopeType = $map['ResourceServerScopeType'];
        }

        if (isset($map['ResourceServerScopeValue'])) {
            $model->resourceServerScopeValue = $map['ResourceServerScopeValue'];
        }

        return $model;
    }
}
