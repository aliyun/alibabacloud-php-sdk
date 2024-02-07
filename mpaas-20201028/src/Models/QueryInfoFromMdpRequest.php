<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class QueryInfoFromMdpRequest extends Model
{
    /**
     * @example ALIPUBE5C3F6D091419
     *
     * @var string
     */
    public $appId;

    /**
     * @example 13178195662
     *
     * @var string
     */
    public $mobile;

    /**
     * @example 2fe6e5fa754be73d1721b9bd2c6cf821
     *
     * @var string
     */
    public $mobileMd5;

    /**
     * @example db0797452ccafce84d7c151eb81596099bda3f097693d1e18b588804e6742ced
     *
     * @var string
     */
    public $mobileSha256;

    /**
     * @example 1000
     *
     * @var string
     */
    public $riskScene;

    /**
     * @example ZXCXMAHQ-zh_CN
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example default
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'        => 'AppId',
        'mobile'       => 'Mobile',
        'mobileMd5'    => 'MobileMd5',
        'mobileSha256' => 'MobileSha256',
        'riskScene'    => 'RiskScene',
        'tenantId'     => 'TenantId',
        'workspaceId'  => 'WorkspaceId',
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
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->mobileMd5) {
            $res['MobileMd5'] = $this->mobileMd5;
        }
        if (null !== $this->mobileSha256) {
            $res['MobileSha256'] = $this->mobileSha256;
        }
        if (null !== $this->riskScene) {
            $res['RiskScene'] = $this->riskScene;
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
     * @return QueryInfoFromMdpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['MobileMd5'])) {
            $model->mobileMd5 = $map['MobileMd5'];
        }
        if (isset($map['MobileSha256'])) {
            $model->mobileSha256 = $map['MobileSha256'];
        }
        if (isset($map['RiskScene'])) {
            $model->riskScene = $map['RiskScene'];
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
