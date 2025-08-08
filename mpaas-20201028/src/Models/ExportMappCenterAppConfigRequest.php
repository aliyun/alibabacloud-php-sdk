<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class ExportMappCenterAppConfigRequest extends Model
{
    /**
     * @var string
     */
    public $apkFileUrl;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $certRsaBase64;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var bool
     */
    public $onexFlag;

    /**
     * @var string
     */
    public $systemType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apkFileUrl' => 'ApkFileUrl',
        'appId' => 'AppId',
        'certRsaBase64' => 'CertRsaBase64',
        'identifier' => 'Identifier',
        'onexFlag' => 'OnexFlag',
        'systemType' => 'SystemType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apkFileUrl) {
            $res['ApkFileUrl'] = $this->apkFileUrl;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->certRsaBase64) {
            $res['CertRsaBase64'] = $this->certRsaBase64;
        }

        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->onexFlag) {
            $res['OnexFlag'] = $this->onexFlag;
        }

        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ApkFileUrl'])) {
            $model->apkFileUrl = $map['ApkFileUrl'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CertRsaBase64'])) {
            $model->certRsaBase64 = $map['CertRsaBase64'];
        }

        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['OnexFlag'])) {
            $model->onexFlag = $map['OnexFlag'];
        }

        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
