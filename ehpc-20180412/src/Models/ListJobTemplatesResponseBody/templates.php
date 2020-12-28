<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $stdoutRedirectPath;

    /**
     * @var string
     */
    public $variables;

    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $packagePath;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var bool
     */
    public $reRunable;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $arrayRequest;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $stderrRedirectPath;

    /**
     * @var string
     */
    public $runasUser;
    protected $_name = [
        'stdoutRedirectPath' => 'StdoutRedirectPath',
        'variables'          => 'Variables',
        'commandLine'        => 'CommandLine',
        'packagePath'        => 'PackagePath',
        'priority'           => 'Priority',
        'reRunable'          => 'ReRunable',
        'name'               => 'Name',
        'arrayRequest'       => 'ArrayRequest',
        'id'                 => 'Id',
        'stderrRedirectPath' => 'StderrRedirectPath',
        'runasUser'          => 'RunasUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stdoutRedirectPath) {
            $res['StdoutRedirectPath'] = $this->stdoutRedirectPath;
        }
        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
        }
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->packagePath) {
            $res['PackagePath'] = $this->packagePath;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->reRunable) {
            $res['ReRunable'] = $this->reRunable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->arrayRequest) {
            $res['ArrayRequest'] = $this->arrayRequest;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->stderrRedirectPath) {
            $res['StderrRedirectPath'] = $this->stderrRedirectPath;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StdoutRedirectPath'])) {
            $model->stdoutRedirectPath = $map['StdoutRedirectPath'];
        }
        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['PackagePath'])) {
            $model->packagePath = $map['PackagePath'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ReRunable'])) {
            $model->reRunable = $map['ReRunable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ArrayRequest'])) {
            $model->arrayRequest = $map['ArrayRequest'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['StderrRedirectPath'])) {
            $model->stderrRedirectPath = $map['StderrRedirectPath'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }

        return $model;
    }
}
