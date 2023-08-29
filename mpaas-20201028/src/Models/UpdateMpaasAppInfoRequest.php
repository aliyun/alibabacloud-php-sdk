<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class UpdateMpaasAppInfoRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $iconFileUrl;

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
    public $tenantId;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'iconFileUrl' => 'IconFileUrl',
        'identifier'  => 'Identifier',
        'onexFlag'    => 'OnexFlag',
        'systemType'  => 'SystemType',
        'tenantId'    => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->iconFileUrl) {
            $res['IconFileUrl'] = $this->iconFileUrl;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMpaasAppInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['IconFileUrl'])) {
            $model->iconFileUrl = $map['IconFileUrl'];
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
