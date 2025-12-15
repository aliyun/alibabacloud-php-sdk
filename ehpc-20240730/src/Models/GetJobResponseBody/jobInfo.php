<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody\jobInfo\resources;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody\jobInfo\resourcesUsed;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody\jobInfo\variables;

class jobInfo extends Model
{
    /**
     * @var string
     */
    public $arrayJobId;

    /**
     * @var string
     */
    public $arrayJobSubId;

    /**
     * @var string
     */
    public $arrayRequest;

    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $errorLog;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $nodeList;

    /**
     * @var string
     */
    public $outputLog;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var resources
     */
    public $resources;

    /**
     * @var resourcesUsed
     */
    public $resourcesUsed;

    /**
     * @var string
     */
    public $runasUser;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'arrayJobId' => 'ArrayJobId',
        'arrayJobSubId' => 'ArrayJobSubId',
        'arrayRequest' => 'ArrayRequest',
        'commandLine' => 'CommandLine',
        'createTime' => 'CreateTime',
        'errorLog' => 'ErrorLog',
        'extraInfo' => 'ExtraInfo',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'jobQueue' => 'JobQueue',
        'lastModifyTime' => 'LastModifyTime',
        'nodeList' => 'NodeList',
        'outputLog' => 'OutputLog',
        'priority' => 'Priority',
        'resources' => 'Resources',
        'resourcesUsed' => 'ResourcesUsed',
        'runasUser' => 'RunasUser',
        'startTime' => 'StartTime',
        'state' => 'State',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        if (null !== $this->resources) {
            $this->resources->validate();
        }
        if (null !== $this->resourcesUsed) {
            $this->resourcesUsed->validate();
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrayJobId) {
            $res['ArrayJobId'] = $this->arrayJobId;
        }

        if (null !== $this->arrayJobSubId) {
            $res['ArrayJobSubId'] = $this->arrayJobSubId;
        }

        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }

        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->errorLog) {
            $res['ErrorLog'] = $this->errorLog;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }

        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->nodeList) {
            $res['NodeList'] = $this->nodeList;
        }

        if (null !== $this->outputLog) {
            $res['OutputLog'] = $this->outputLog;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toArray($noStream) : $this->resources;
        }

        if (null !== $this->resourcesUsed) {
            $res['ResourcesUsed'] = null !== $this->resourcesUsed ? $this->resourcesUsed->toArray($noStream) : $this->resourcesUsed;
        }

        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['Variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ArrayJobId'])) {
            $model->arrayJobId = $map['ArrayJobId'];
        }

        if (isset($map['ArrayJobSubId'])) {
            $model->arrayJobSubId = $map['ArrayJobSubId'];
        }

        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }

        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ErrorLog'])) {
            $model->errorLog = $map['ErrorLog'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }

        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }

        if (isset($map['NodeList'])) {
            $model->nodeList = $map['NodeList'];
        }

        if (isset($map['OutputLog'])) {
            $model->outputLog = $map['OutputLog'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }

        if (isset($map['ResourcesUsed'])) {
            $model->resourcesUsed = resourcesUsed::fromMap($map['ResourcesUsed']);
        }

        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['Variables'] as $item1) {
                    $model->variables[$n1] = variables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
