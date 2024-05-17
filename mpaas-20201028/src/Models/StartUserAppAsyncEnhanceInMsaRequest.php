<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class StartUserAppAsyncEnhanceInMsaRequest extends Model
{
    /**
     * @var bool
     */
    public $apkProtector;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $assetsFileList;

    /**
     * @var string
     */
    public $classes;

    /**
     * @var int
     */
    public $dalvikDebugger;

    /**
     * @var int
     */
    public $emulatorEnvironment;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $javaHook;

    /**
     * @var int
     */
    public $memoryDump;

    /**
     * @var int
     */
    public $nativeDebugger;

    /**
     * @var int
     */
    public $nativeHook;

    /**
     * @var int
     */
    public $packageTampered;

    /**
     * @var int
     */
    public $root;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $soFileList;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $tenantId;

    /**
     * @var bool
     */
    public $totalSwitch;

    /**
     * @var bool
     */
    public $useAShield;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apkProtector'        => 'ApkProtector',
        'appId'               => 'AppId',
        'assetsFileList'      => 'AssetsFileList',
        'classes'             => 'Classes',
        'dalvikDebugger'      => 'DalvikDebugger',
        'emulatorEnvironment' => 'EmulatorEnvironment',
        'id'                  => 'Id',
        'javaHook'            => 'JavaHook',
        'memoryDump'          => 'MemoryDump',
        'nativeDebugger'      => 'NativeDebugger',
        'nativeHook'          => 'NativeHook',
        'packageTampered'     => 'PackageTampered',
        'root'                => 'Root',
        'runMode'             => 'RunMode',
        'soFileList'          => 'SoFileList',
        'taskType'            => 'TaskType',
        'tenantId'            => 'TenantId',
        'totalSwitch'         => 'TotalSwitch',
        'useAShield'          => 'UseAShield',
        'workspaceId'         => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apkProtector) {
            $res['ApkProtector'] = $this->apkProtector;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->assetsFileList) {
            $res['AssetsFileList'] = $this->assetsFileList;
        }
        if (null !== $this->classes) {
            $res['Classes'] = $this->classes;
        }
        if (null !== $this->dalvikDebugger) {
            $res['DalvikDebugger'] = $this->dalvikDebugger;
        }
        if (null !== $this->emulatorEnvironment) {
            $res['EmulatorEnvironment'] = $this->emulatorEnvironment;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->javaHook) {
            $res['JavaHook'] = $this->javaHook;
        }
        if (null !== $this->memoryDump) {
            $res['MemoryDump'] = $this->memoryDump;
        }
        if (null !== $this->nativeDebugger) {
            $res['NativeDebugger'] = $this->nativeDebugger;
        }
        if (null !== $this->nativeHook) {
            $res['NativeHook'] = $this->nativeHook;
        }
        if (null !== $this->packageTampered) {
            $res['PackageTampered'] = $this->packageTampered;
        }
        if (null !== $this->root) {
            $res['Root'] = $this->root;
        }
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }
        if (null !== $this->soFileList) {
            $res['SoFileList'] = $this->soFileList;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->totalSwitch) {
            $res['TotalSwitch'] = $this->totalSwitch;
        }
        if (null !== $this->useAShield) {
            $res['UseAShield'] = $this->useAShield;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartUserAppAsyncEnhanceInMsaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApkProtector'])) {
            $model->apkProtector = $map['ApkProtector'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AssetsFileList'])) {
            $model->assetsFileList = $map['AssetsFileList'];
        }
        if (isset($map['Classes'])) {
            $model->classes = $map['Classes'];
        }
        if (isset($map['DalvikDebugger'])) {
            $model->dalvikDebugger = $map['DalvikDebugger'];
        }
        if (isset($map['EmulatorEnvironment'])) {
            $model->emulatorEnvironment = $map['EmulatorEnvironment'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JavaHook'])) {
            $model->javaHook = $map['JavaHook'];
        }
        if (isset($map['MemoryDump'])) {
            $model->memoryDump = $map['MemoryDump'];
        }
        if (isset($map['NativeDebugger'])) {
            $model->nativeDebugger = $map['NativeDebugger'];
        }
        if (isset($map['NativeHook'])) {
            $model->nativeHook = $map['NativeHook'];
        }
        if (isset($map['PackageTampered'])) {
            $model->packageTampered = $map['PackageTampered'];
        }
        if (isset($map['Root'])) {
            $model->root = $map['Root'];
        }
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }
        if (isset($map['SoFileList'])) {
            $model->soFileList = $map['SoFileList'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TotalSwitch'])) {
            $model->totalSwitch = $map['TotalSwitch'];
        }
        if (isset($map['UseAShield'])) {
            $model->useAShield = $map['UseAShield'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
