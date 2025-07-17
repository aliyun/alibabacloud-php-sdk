<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetRumExceptionStackRequest extends Model
{
    /**
     * @description The binary images, which represent all executable files loaded into the process address space when a crash occurs.
     *
     * @example iOSDemo:arm64%3B1489F4D3-6DE2-300C-90E9-E1B869675351%3B0x0000000104064000\\nAlibabaCloudRUM:arm64%3BAB7B3A8E-6CEE-325D-BCBB-8DA50E61804F%3B0x0000000106660000\\nlibdispatch.dylib:arm
     *
     * @var string
     */
    public $exceptionBinaryImages;

    /**
     * @description The exception stack information. Set the value to a JSON string. call_stack.info represents the stack information, call_stack.thread.name represents the thread name, and call_stack.thread.id represents the thread ID. This parameter is exactly the same as the exception.stack parameter in the logstore-rum Logstore of Simple Log Service.
     *
     * @example [
     * {
     * "call_stack.info": "libsystem_kernel.dylib  0x00000001f1ce9178 0x00000001f1ce8000 + 4472\\r\\nlibsystem_kernel.dylib  0x00000001f1ce8f10 0x00000001f1ce8000 + 3856\\r\\nlibsystem_kernel.dylib  0x00000001f1ced718 0x00000001f1ce8000 + 22296\\r\\nAlibabaCloudRUM  0x0000000106711af4 0x0000000106660000 + 727796\\r\\nlibsystem_pthread.dylib  0x00000002146744d4 0x0000000214672000 + 9428",
     * "call_stack.thread.name": "#3 BRSCrash Exception Handler (Secondary)",
     * "call_stack.thread.id": "16643"
     * }
     * ]
     *
     * @var string
     */
    public $exceptionStack;

    /**
     * @description The ID of the exception thread.
     *
     * @example 16643
     *
     * @var string
     */
    public $exceptionThreadId;

    /**
     * @description Extra information about iOS symbol tables. You can leave this parameter empty.
     *
     * @example GraphicsServices:system/GraphicsServices/85419099-269B-336D-86B4-0D52D0FF6923/GraphicsServices;WebCore:system/WebCore/BF44A3F4-85D4-38C8-BF26-197F06ADE273/WebCore
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The application ID.
     *
     * This parameter is required.
     *
     * @example atxxxxzkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The parsing type. Valid values:
     *
     *   js: Parses JavaScript errors.
     *   sym: Parses PC errors.
     *   har: Parses HarmonyOS errors.
     *   dSYM: Parses iOS errors.
     *   so: Parses Android errors.
     *
     * @example source-map
     *
     * @var string
     */
    public $sourcemapType;
    protected $_name = [
        'exceptionBinaryImages' => 'ExceptionBinaryImages',
        'exceptionStack' => 'ExceptionStack',
        'exceptionThreadId' => 'ExceptionThreadId',
        'extraInfo' => 'ExtraInfo',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'sourcemapType' => 'SourcemapType',
    ];

    public function validate() {}

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
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
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
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
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
