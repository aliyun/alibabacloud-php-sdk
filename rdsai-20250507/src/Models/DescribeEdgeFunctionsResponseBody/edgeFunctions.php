<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeEdgeFunctionsResponseBody;

use AlibabaCloud\Dara\Model;

class edgeFunctions extends Model
{
    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $edgeFunctionName;

    /**
     * @var string
     */
    public $functionUrl;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $urlInternet;

    /**
     * @var string
     */
    public $urlIntranet;
    protected $_name = [
        'cpu' => 'Cpu',
        'createdTime' => 'CreatedTime',
        'edgeFunctionName' => 'EdgeFunctionName',
        'functionUrl' => 'FunctionUrl',
        'memorySize' => 'MemorySize',
        'modifiedTime' => 'ModifiedTime',
        'runtime' => 'Runtime',
        'status' => 'Status',
        'urlInternet' => 'UrlInternet',
        'urlIntranet' => 'UrlIntranet',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->edgeFunctionName) {
            $res['EdgeFunctionName'] = $this->edgeFunctionName;
        }

        if (null !== $this->functionUrl) {
            $res['FunctionUrl'] = $this->functionUrl;
        }

        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->urlInternet) {
            $res['UrlInternet'] = $this->urlInternet;
        }

        if (null !== $this->urlIntranet) {
            $res['UrlIntranet'] = $this->urlIntranet;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['EdgeFunctionName'])) {
            $model->edgeFunctionName = $map['EdgeFunctionName'];
        }

        if (isset($map['FunctionUrl'])) {
            $model->functionUrl = $map['FunctionUrl'];
        }

        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UrlInternet'])) {
            $model->urlInternet = $map['UrlInternet'];
        }

        if (isset($map['UrlIntranet'])) {
            $model->urlIntranet = $map['UrlIntranet'];
        }

        return $model;
    }
}
