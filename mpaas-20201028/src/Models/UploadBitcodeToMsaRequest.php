<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class UploadBitcodeToMsaRequest extends Model
{
    /**
     * @example ALIPUBE5C3F6D091419
     *
     * @var string
     */
    public $appId;

    /**
     * @example 3sAXCwAAAAAUAAAACHoAAP
     *
     * @var string
     */
    public $bitcode;

    /**
     * @example xcode14
     *
     * @var string
     */
    public $codeVersion;

    /**
     * @example {}
     *
     * @var string
     */
    public $license;

    /**
     * @example ZXCXMAHQ-zh_CN
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example dev
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'       => 'AppId',
        'bitcode'     => 'Bitcode',
        'codeVersion' => 'CodeVersion',
        'license'     => 'License',
        'tenantId'    => 'TenantId',
        'workspaceId' => 'WorkspaceId',
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
        if (null !== $this->bitcode) {
            $res['Bitcode'] = $this->bitcode;
        }
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }
        if (null !== $this->license) {
            $res['License'] = $this->license;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadBitcodeToMsaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Bitcode'])) {
            $model->bitcode = $map['Bitcode'];
        }
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }
        if (isset($map['License'])) {
            $model->license = $map['License'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
