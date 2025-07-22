<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeFlowLogsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeFlowLogsRequest extends Model
{
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
     * @example ecr-a5xqrgbeidz1w8****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The ID of the flow log.
     *
     * @example flowlog-jqnr0veifo5d****
     *
     * @var string
     */
    public $flowLogId;

    /**
     * @description The flow log name. The name must be 0 to 128 characters in length.
     *
     * @example same-flowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @description The ID of the VBR associated with the ECR.
     *
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The Logstore that stores the captured traffic data.
     *
     *   If a Logstore is already created in the selected region, enter the name of the Logstore.
     *   If no Logstores are created in the selected region, enter a name and the system automatically creates a Logstore. The name of the Logstore. The name must meet the following requirements:
     *   The name must be unique in a project.
     *   It can contain only lowercase letters, digits, hyphens (-), and underscores (_).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The maximum number of entries to return. Valid values: 1 to 2147483647. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     * - You do not need to specify this parameter for the first request.
     * - You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example gAAAAABkWw*******
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The project that stores the captured traffic data.
     *
     *   If a project is already created in the selected region, enter the name of the project.
     *   If no projects are created in the selected region, enter a name and the system automatically creates a project.
     *
     * The project name must be unique in a region. You cannot change the name after the project is created. The name must meet the following requirements:
     *
     *   The name must be globally unique.
     *   The name can contain only lowercase letters,
     *   digits, and hyphens (-).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'flowLogId' => 'FlowLogId',
        'flowLogName' => 'FlowLogName',
        'instanceId' => 'InstanceId',
        'logStoreName' => 'LogStoreName',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'projectName' => 'ProjectName',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
