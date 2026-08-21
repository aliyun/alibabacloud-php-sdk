<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetConfigByNameRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var bool
     */
    public $useGlobalUid;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'configName' => 'configName',
        'configType' => 'configType',
        'entityId' => 'entityId',
        'useGlobalUid' => 'useGlobalUid',
        'versionId' => 'versionId',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }

        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->useGlobalUid) {
            $res['useGlobalUid'] = $this->useGlobalUid;
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }

        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['useGlobalUid'])) {
            $model->useGlobalUid = $map['useGlobalUid'];
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
