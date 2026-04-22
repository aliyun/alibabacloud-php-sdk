<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationLogsResponseBody\items;

use AlibabaCloud\Dara\Model;

class logRecords extends Model
{
    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $fileLine;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fullFilePath;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var int
     */
    public $logLevelId;

    /**
     * @var string
     */
    public $logLevelName;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $runtimeVersion;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'componentName' => 'ComponentName',
        'containerName' => 'ContainerName',
        'content' => 'Content',
        'date' => 'Date',
        'fileLine' => 'FileLine',
        'fileName' => 'FileName',
        'fullFilePath' => 'FullFilePath',
        'hostname' => 'Hostname',
        'logLevelId' => 'LogLevelId',
        'logLevelName' => 'LogLevelName',
        'method' => 'Method',
        'name' => 'Name',
        'runtime' => 'Runtime',
        'runtimeVersion' => 'RuntimeVersion',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->fileLine) {
            $res['FileLine'] = $this->fileLine;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fullFilePath) {
            $res['FullFilePath'] = $this->fullFilePath;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->logLevelId) {
            $res['LogLevelId'] = $this->logLevelId;
        }

        if (null !== $this->logLevelName) {
            $res['LogLevelName'] = $this->logLevelName;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }

        if (null !== $this->runtimeVersion) {
            $res['RuntimeVersion'] = $this->runtimeVersion;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['FileLine'])) {
            $model->fileLine = $map['FileLine'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FullFilePath'])) {
            $model->fullFilePath = $map['FullFilePath'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['LogLevelId'])) {
            $model->logLevelId = $map['LogLevelId'];
        }

        if (isset($map['LogLevelName'])) {
            $model->logLevelName = $map['LogLevelName'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }

        if (isset($map['RuntimeVersion'])) {
            $model->runtimeVersion = $map['RuntimeVersion'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
