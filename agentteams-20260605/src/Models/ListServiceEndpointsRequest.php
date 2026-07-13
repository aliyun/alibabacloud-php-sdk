<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class ListServiceEndpointsRequest extends Model
{
    /**
     * @var string
     */
    public $component;

    /**
     * @var string
     */
    public $domainType;

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
    public $networkType;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $skip;
    protected $_name = [
        'component' => 'Component',
        'domainType' => 'DomainType',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'networkType' => 'NetworkType',
        'nextToken' => 'NextToken',
        'resourceName' => 'ResourceName',
        'skip' => 'Skip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
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
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        return $model;
    }
}
