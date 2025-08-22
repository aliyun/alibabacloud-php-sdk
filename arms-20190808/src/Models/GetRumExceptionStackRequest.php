<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetRumExceptionStackRequest extends Model
{
    /**
     * @var string
     */
    public $exceptionBinaryImages;

    /**
     * @var string
     */
    public $exceptionStack;

    /**
     * @var string
     */
    public $exceptionThreadId;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $sourcemapType;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'exceptionBinaryImages' => 'ExceptionBinaryImages',
        'exceptionStack' => 'ExceptionStack',
        'exceptionThreadId' => 'ExceptionThreadId',
        'extraInfo' => 'ExtraInfo',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'serviceId' => 'ServiceId',
        'sourcemapType' => 'SourcemapType',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionBinaryImages) {
            $res['ExceptionBinaryImages'] = $this->exceptionBinaryImages;
        }

        if (null !== $this->exceptionStack) {
            $res['ExceptionStack'] = $this->exceptionStack;
        }

        if (null !== $this->exceptionThreadId) {
            $res['ExceptionThreadId'] = $this->exceptionThreadId;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->sourcemapType) {
            $res['SourcemapType'] = $this->sourcemapType;
        }

        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
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
        if (isset($map['ExceptionBinaryImages'])) {
            $model->exceptionBinaryImages = $map['ExceptionBinaryImages'];
        }

        if (isset($map['ExceptionStack'])) {
            $model->exceptionStack = $map['ExceptionStack'];
        }

        if (isset($map['ExceptionThreadId'])) {
            $model->exceptionThreadId = $map['ExceptionThreadId'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['SourcemapType'])) {
            $model->sourcemapType = $map['SourcemapType'];
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
