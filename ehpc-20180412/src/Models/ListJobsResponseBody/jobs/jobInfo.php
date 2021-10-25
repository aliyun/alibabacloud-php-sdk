<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody\jobs;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody\jobs\jobInfo\resources;
use AlibabaCloud\Tea\Model;

class jobInfo extends Model
{
    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $comment;

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
    public $priority;

    /**
     * @var string
     */
    public $shellPath;

    /**
     * @var string
     */
    public $stdout;

    /**
     * @var string
     */
    public $arrayRequest;

    /**
     * @var string
     */
    public $startTime;

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
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var resources
     */
    public $resources;
    protected $_name = [
        'owner'          => 'Owner',
        'comment'        => 'Comment',
        'state'          => 'State',
        'stderr'         => 'Stderr',
        'priority'       => 'Priority',
        'shellPath'      => 'ShellPath',
        'stdout'         => 'Stdout',
        'arrayRequest'   => 'ArrayRequest',
        'startTime'      => 'StartTime',
        'lastModifyTime' => 'LastModifyTime',
        'nodeList'       => 'NodeList',
        'name'           => 'Name',
        'id'             => 'Id',
        'submitTime'     => 'SubmitTime',
        'resources'      => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->stderr) {
            $res['Stderr'] = $this->stderr;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->shellPath) {
            $res['ShellPath'] = $this->shellPath;
        }
        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
        }
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->nodeList) {
            $res['NodeList'] = $this->nodeList;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Stderr'])) {
            $model->stderr = $map['Stderr'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ShellPath'])) {
            $model->shellPath = $map['ShellPath'];
        }
        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['NodeList'])) {
            $model->nodeList = $map['NodeList'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }

        return $model;
    }
}
