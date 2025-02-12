<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs\jobSpec\resources;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs\jobSpec\resourcesActualOccupied;

class jobSpec extends Model
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
    public $comment;
    /**
     * @var string
     */
    public $id;
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
    public $priority;
    /**
     * @var resources
     */
    public $resources;
    /**
     * @var resourcesActualOccupied
     */
    public $resourcesActualOccupied;
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
     * @var string
     */
    public $stderrPath;
    /**
     * @var string
     */
    public $stdoutPath;
    /**
     * @var string
     */
    public $submitTime;
    /**
     * @var string
     */
    public $variables;
    protected $_name = [
        'arrayJobId'              => 'ArrayJobId',
        'arrayJobSubId'           => 'ArrayJobSubId',
        'arrayRequest'            => 'ArrayRequest',
        'comment'                 => 'Comment',
        'id'                      => 'Id',
        'jobQueue'                => 'JobQueue',
        'lastModifyTime'          => 'LastModifyTime',
        'nodeList'                => 'NodeList',
        'priority'                => 'Priority',
        'resources'               => 'Resources',
        'resourcesActualOccupied' => 'ResourcesActualOccupied',
        'runasUser'               => 'RunasUser',
        'startTime'               => 'StartTime',
        'state'                   => 'State',
        'stderrPath'              => 'StderrPath',
        'stdoutPath'              => 'StdoutPath',
        'submitTime'              => 'SubmitTime',
        'variables'               => 'Variables',
    ];

    public function validate()
    {
        if (null !== $this->resources) {
            $this->resources->validate();
        }
        if (null !== $this->resourcesActualOccupied) {
            $this->resourcesActualOccupied->validate();
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

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toArray($noStream) : $this->resources;
        }

        if (null !== $this->resourcesActualOccupied) {
            $res['ResourcesActualOccupied'] = null !== $this->resourcesActualOccupied ? $this->resourcesActualOccupied->toArray($noStream) : $this->resourcesActualOccupied;
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

        if (null !== $this->stderrPath) {
            $res['StderrPath'] = $this->stderrPath;
        }

        if (null !== $this->stdoutPath) {
            $res['StdoutPath'] = $this->stdoutPath;
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
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

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }

        if (isset($map['ResourcesActualOccupied'])) {
            $model->resourcesActualOccupied = resourcesActualOccupied::fromMap($map['ResourcesActualOccupied']);
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

        if (isset($map['StderrPath'])) {
            $model->stderrPath = $map['StderrPath'];
        }

        if (isset($map['StdoutPath'])) {
            $model->stdoutPath = $map['StdoutPath'];
        }

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
