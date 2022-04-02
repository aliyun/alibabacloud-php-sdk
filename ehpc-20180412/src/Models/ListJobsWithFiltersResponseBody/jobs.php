<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsWithFiltersResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsWithFiltersResponseBody\jobs\resources;
use AlibabaCloud\Tea\Model;

class jobs extends Model
{
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
    public $lastModifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeList;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var resources
     */
    public $resources;

    /**
     * @var string
     */
    public $shellPath;

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
    public $stderr;

    /**
     * @var string
     */
    public $stdout;

    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'arrayRequest'   => 'ArrayRequest',
        'comment'        => 'Comment',
        'id'             => 'Id',
        'lastModifyTime' => 'LastModifyTime',
        'name'           => 'Name',
        'nodeList'       => 'NodeList',
        'owner'          => 'Owner',
        'priority'       => 'Priority',
        'queue'          => 'Queue',
        'resources'      => 'Resources',
        'shellPath'      => 'ShellPath',
        'startTime'      => 'StartTime',
        'state'          => 'State',
        'stderr'         => 'Stderr',
        'stdout'         => 'Stdout',
        'submitTime'     => 'SubmitTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeList) {
            $res['NodeList'] = $this->nodeList;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->shellPath) {
            $res['ShellPath'] = $this->shellPath;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->stderr) {
            $res['Stderr'] = $this->stderr;
        }
        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeList'])) {
            $model->nodeList = $map['NodeList'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['ShellPath'])) {
            $model->shellPath = $map['ShellPath'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Stderr'])) {
            $model->stderr = $map['Stderr'];
        }
        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        return $model;
    }
}
