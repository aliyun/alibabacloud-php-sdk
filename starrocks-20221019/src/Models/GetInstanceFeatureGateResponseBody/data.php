<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\GetInstanceFeatureGateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $consoleControlRestart;

    /**
     * @var bool
     */
    public $enableManageMv;

    /**
     * @var bool
     */
    public $fullManagedSecurityGroup;

    /**
     * @var bool
     */
    public $mountDlfMetaToken;

    /**
     * @var string[]
     */
    public $supportAddConfigTypes;

    /**
     * @var bool
     */
    public $supportBackup;

    /**
     * @var bool
     */
    public $supportCreateAgent;

    /**
     * @var bool
     */
    public $supportCreateNonStandardNodeGroup;

    /**
     * @var bool
     */
    public $supportEed;

    /**
     * @var bool
     */
    public $supportEnableAi;

    /**
     * @var bool
     */
    public $supportEnableSSL;

    /**
     * @var bool
     */
    public $supportFastModeModifyConfig;

    /**
     * @var bool
     */
    public $supportFastModeModifyResource;

    /**
     * @var bool
     */
    public $supportFastRestart;

    /**
     * @var bool
     */
    public $supportFeGateway;

    /**
     * @var bool
     */
    public $supportHostAlias;

    /**
     * @var bool
     */
    public $supportModifyTimezone;

    /**
     * @var bool
     */
    public $supportMultiAZ;

    /**
     * @var bool
     */
    public $useComputeNode;

    /**
     * @var bool
     */
    public $supportCompactionService;
    protected $_name = [
        'consoleControlRestart' => 'ConsoleControlRestart',
        'enableManageMv' => 'EnableManageMv',
        'fullManagedSecurityGroup' => 'FullManagedSecurityGroup',
        'mountDlfMetaToken' => 'MountDlfMetaToken',
        'supportAddConfigTypes' => 'SupportAddConfigTypes',
        'supportBackup' => 'SupportBackup',
        'supportCreateAgent' => 'SupportCreateAgent',
        'supportCreateNonStandardNodeGroup' => 'SupportCreateNonStandardNodeGroup',
        'supportEed' => 'SupportEed',
        'supportEnableAi' => 'SupportEnableAi',
        'supportEnableSSL' => 'SupportEnableSSL',
        'supportFastModeModifyConfig' => 'SupportFastModeModifyConfig',
        'supportFastModeModifyResource' => 'SupportFastModeModifyResource',
        'supportFastRestart' => 'SupportFastRestart',
        'supportFeGateway' => 'SupportFeGateway',
        'supportHostAlias' => 'SupportHostAlias',
        'supportModifyTimezone' => 'SupportModifyTimezone',
        'supportMultiAZ' => 'SupportMultiAZ',
        'useComputeNode' => 'UseComputeNode',
        'supportCompactionService' => 'supportCompactionService',
    ];

    public function validate()
    {
        if (\is_array($this->supportAddConfigTypes)) {
            Model::validateArray($this->supportAddConfigTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleControlRestart) {
            $res['ConsoleControlRestart'] = $this->consoleControlRestart;
        }

        if (null !== $this->enableManageMv) {
            $res['EnableManageMv'] = $this->enableManageMv;
        }

        if (null !== $this->fullManagedSecurityGroup) {
            $res['FullManagedSecurityGroup'] = $this->fullManagedSecurityGroup;
        }

        if (null !== $this->mountDlfMetaToken) {
            $res['MountDlfMetaToken'] = $this->mountDlfMetaToken;
        }

        if (null !== $this->supportAddConfigTypes) {
            if (\is_array($this->supportAddConfigTypes)) {
                $res['SupportAddConfigTypes'] = [];
                $n1 = 0;
                foreach ($this->supportAddConfigTypes as $item1) {
                    $res['SupportAddConfigTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportBackup) {
            $res['SupportBackup'] = $this->supportBackup;
        }

        if (null !== $this->supportCreateAgent) {
            $res['SupportCreateAgent'] = $this->supportCreateAgent;
        }

        if (null !== $this->supportCreateNonStandardNodeGroup) {
            $res['SupportCreateNonStandardNodeGroup'] = $this->supportCreateNonStandardNodeGroup;
        }

        if (null !== $this->supportEed) {
            $res['SupportEed'] = $this->supportEed;
        }

        if (null !== $this->supportEnableAi) {
            $res['SupportEnableAi'] = $this->supportEnableAi;
        }

        if (null !== $this->supportEnableSSL) {
            $res['SupportEnableSSL'] = $this->supportEnableSSL;
        }

        if (null !== $this->supportFastModeModifyConfig) {
            $res['SupportFastModeModifyConfig'] = $this->supportFastModeModifyConfig;
        }

        if (null !== $this->supportFastModeModifyResource) {
            $res['SupportFastModeModifyResource'] = $this->supportFastModeModifyResource;
        }

        if (null !== $this->supportFastRestart) {
            $res['SupportFastRestart'] = $this->supportFastRestart;
        }

        if (null !== $this->supportFeGateway) {
            $res['SupportFeGateway'] = $this->supportFeGateway;
        }

        if (null !== $this->supportHostAlias) {
            $res['SupportHostAlias'] = $this->supportHostAlias;
        }

        if (null !== $this->supportModifyTimezone) {
            $res['SupportModifyTimezone'] = $this->supportModifyTimezone;
        }

        if (null !== $this->supportMultiAZ) {
            $res['SupportMultiAZ'] = $this->supportMultiAZ;
        }

        if (null !== $this->useComputeNode) {
            $res['UseComputeNode'] = $this->useComputeNode;
        }

        if (null !== $this->supportCompactionService) {
            $res['supportCompactionService'] = $this->supportCompactionService;
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
        if (isset($map['ConsoleControlRestart'])) {
            $model->consoleControlRestart = $map['ConsoleControlRestart'];
        }

        if (isset($map['EnableManageMv'])) {
            $model->enableManageMv = $map['EnableManageMv'];
        }

        if (isset($map['FullManagedSecurityGroup'])) {
            $model->fullManagedSecurityGroup = $map['FullManagedSecurityGroup'];
        }

        if (isset($map['MountDlfMetaToken'])) {
            $model->mountDlfMetaToken = $map['MountDlfMetaToken'];
        }

        if (isset($map['SupportAddConfigTypes'])) {
            if (!empty($map['SupportAddConfigTypes'])) {
                $model->supportAddConfigTypes = [];
                $n1 = 0;
                foreach ($map['SupportAddConfigTypes'] as $item1) {
                    $model->supportAddConfigTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportBackup'])) {
            $model->supportBackup = $map['SupportBackup'];
        }

        if (isset($map['SupportCreateAgent'])) {
            $model->supportCreateAgent = $map['SupportCreateAgent'];
        }

        if (isset($map['SupportCreateNonStandardNodeGroup'])) {
            $model->supportCreateNonStandardNodeGroup = $map['SupportCreateNonStandardNodeGroup'];
        }

        if (isset($map['SupportEed'])) {
            $model->supportEed = $map['SupportEed'];
        }

        if (isset($map['SupportEnableAi'])) {
            $model->supportEnableAi = $map['SupportEnableAi'];
        }

        if (isset($map['SupportEnableSSL'])) {
            $model->supportEnableSSL = $map['SupportEnableSSL'];
        }

        if (isset($map['SupportFastModeModifyConfig'])) {
            $model->supportFastModeModifyConfig = $map['SupportFastModeModifyConfig'];
        }

        if (isset($map['SupportFastModeModifyResource'])) {
            $model->supportFastModeModifyResource = $map['SupportFastModeModifyResource'];
        }

        if (isset($map['SupportFastRestart'])) {
            $model->supportFastRestart = $map['SupportFastRestart'];
        }

        if (isset($map['SupportFeGateway'])) {
            $model->supportFeGateway = $map['SupportFeGateway'];
        }

        if (isset($map['SupportHostAlias'])) {
            $model->supportHostAlias = $map['SupportHostAlias'];
        }

        if (isset($map['SupportModifyTimezone'])) {
            $model->supportModifyTimezone = $map['SupportModifyTimezone'];
        }

        if (isset($map['SupportMultiAZ'])) {
            $model->supportMultiAZ = $map['SupportMultiAZ'];
        }

        if (isset($map['UseComputeNode'])) {
            $model->useComputeNode = $map['UseComputeNode'];
        }

        if (isset($map['supportCompactionService'])) {
            $model->supportCompactionService = $map['supportCompactionService'];
        }

        return $model;
    }
}
