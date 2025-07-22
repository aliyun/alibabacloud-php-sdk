<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class DescribeExpressConnectRouterRouteEntriesRequest extends Model
{
    /**
     * @description The Autonomous System (AS) path of the route.
     *
     * @example [64993,64512]
     *
     * @var string
     */
    public $asPath;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The community value that is carried in the Border Gateway Protocol (BGP) route.
     *
     * @example 9001:9263
     *
     * @var string
     */
    public $community;

    /**
     * @description The destination CIDR block of the route that you want to query.
     *
     * @example 172.20.47.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run.
     *   **false** (default): performs a dry run and performs the actual request.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ECR ID.
     *
     * This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The maximum number of entries to read. Valid values: 1 to 2147483647. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the next-hop instance.
     *
     * @example br-hp3u4u5f03tfuljis****
     *
     * @var string
     */
    public $nexthopInstanceId;

    /**
     * @description The region ID of the ECR.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $queryRegionId;
    protected $_name = [
        'asPath' => 'AsPath',
        'clientToken' => 'ClientToken',
        'community' => 'Community',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nexthopInstanceId' => 'NexthopInstanceId',
        'queryRegionId' => 'QueryRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPath) {
            $res['AsPath'] = $this->asPath;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->community) {
            $res['Community'] = $this->community;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nexthopInstanceId) {
            $res['NexthopInstanceId'] = $this->nexthopInstanceId;
        }
        if (null !== $this->queryRegionId) {
            $res['QueryRegionId'] = $this->queryRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExpressConnectRouterRouteEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPath'])) {
            $model->asPath = $map['AsPath'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Community'])) {
            $model->community = $map['Community'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NexthopInstanceId'])) {
            $model->nexthopInstanceId = $map['NexthopInstanceId'];
        }
        if (isset($map['QueryRegionId'])) {
            $model->queryRegionId = $map['QueryRegionId'];
        }

        return $model;
    }
}
