<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoMarketResponseBody\accessDeniedDetail;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoMarketResponseBody\categories;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoMarketResponseBody\endpoints;

class DescribeAtiAgentRegisterInfoMarketResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $agentDescription;

    /**
     * @var string
     */
    public $agentDisplayName;

    /**
     * @var string
     */
    public $agentHost;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentRegisterInfoId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var categories
     */
    public $categories;

    /**
     * @var endpoints
     */
    public $endpoints;

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
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trustCardContent;

    /**
     * @var string
     */
    public $trustLevel;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'agentDescription' => 'AgentDescription',
        'agentDisplayName' => 'AgentDisplayName',
        'agentHost' => 'AgentHost',
        'agentId' => 'AgentId',
        'agentRegisterInfoId' => 'AgentRegisterInfoId',
        'agentVersion' => 'AgentVersion',
        'categories' => 'Categories',
        'endpoints' => 'Endpoints',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'trustCardContent' => 'TrustCardContent',
        'trustLevel' => 'TrustLevel',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        if (null !== $this->categories) {
            $this->categories->validate();
        }
        if (null !== $this->endpoints) {
            $this->endpoints->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->agentDescription) {
            $res['AgentDescription'] = $this->agentDescription;
        }

        if (null !== $this->agentDisplayName) {
            $res['AgentDisplayName'] = $this->agentDisplayName;
        }

        if (null !== $this->agentHost) {
            $res['AgentHost'] = $this->agentHost;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentRegisterInfoId) {
            $res['AgentRegisterInfoId'] = $this->agentRegisterInfoId;
        }

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->categories) {
            $res['Categories'] = null !== $this->categories ? $this->categories->toArray($noStream) : $this->categories;
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toArray($noStream) : $this->endpoints;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->trustCardContent) {
            $res['TrustCardContent'] = $this->trustCardContent;
        }

        if (null !== $this->trustLevel) {
            $res['TrustLevel'] = $this->trustLevel;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['AgentDescription'])) {
            $model->agentDescription = $map['AgentDescription'];
        }

        if (isset($map['AgentDisplayName'])) {
            $model->agentDisplayName = $map['AgentDisplayName'];
        }

        if (isset($map['AgentHost'])) {
            $model->agentHost = $map['AgentHost'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentRegisterInfoId'])) {
            $model->agentRegisterInfoId = $map['AgentRegisterInfoId'];
        }

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['Categories'])) {
            $model->categories = categories::fromMap($map['Categories']);
        }

        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TrustCardContent'])) {
            $model->trustCardContent = $map['TrustCardContent'];
        }

        if (isset($map['TrustLevel'])) {
            $model->trustLevel = $map['TrustLevel'];
        }

        return $model;
    }
}
