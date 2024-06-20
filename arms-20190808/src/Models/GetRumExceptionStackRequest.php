<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetRumExceptionStackRequest extends Model
{
    /**
     * @example iOSDemo:arm64%3B1489F4D3-6DE2-300C-90E9-E1B869675351%3B0x0000000104064000\\nAlibabaCloudRUM:arm64%3BAB7B3A8E-6CEE-325D-BCBB-8DA50E61804F%3B0x0000000106660000\\nlibdispatch.dylib:arm
     *
     * @var string
     */
    public $exceptionBinaryImages;

    /**
     * @example [
     * ]
     * @var string
     */
    public $exceptionStack;

    /**
     * @example 16643
     *
     * @var string
     */
    public $exceptionThreadId;

    /**
     * @description This parameter is required.
     *
     * @example atxxxxzkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourcemapType;
    protected $_name = [
        'exceptionBinaryImages' => 'ExceptionBinaryImages',
        'exceptionStack'        => 'ExceptionStack',
        'exceptionThreadId'     => 'ExceptionThreadId',
        'pid'                   => 'Pid',
        'regionId'              => 'RegionId',
        'sourcemapType'         => 'SourcemapType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourcemapType) {
            $res['SourcemapType'] = $this->sourcemapType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRumExceptionStackRequest
     */
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
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourcemapType'])) {
            $model->sourcemapType = $map['SourcemapType'];
        }

        return $model;
    }
}
