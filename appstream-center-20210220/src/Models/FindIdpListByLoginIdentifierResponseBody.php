<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody\idpInfos;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody\officeSiteInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody\tenantAliasInfo;
use AlibabaCloud\Tea\Model;

class FindIdpListByLoginIdentifierResponseBody extends Model
{
    /**
     * @var idpInfos[]
     */
    public $idpInfos;

    /**
     * @var officeSiteInfo
     */
    public $officeSiteInfo;

    /**
     * @var string[]
     */
    public $popRegionConfig;

    /**
     * @example cn_hangzhou
     *
     * @var string
     */
    public $profileRegion;

    /**
     * @example AD2D0761-1FE5-549D-B169-D3F8D19C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tenantAliasInfo
     */
    public $tenantAliasInfo;
    protected $_name = [
        'idpInfos'        => 'IdpInfos',
        'officeSiteInfo'  => 'OfficeSiteInfo',
        'popRegionConfig' => 'PopRegionConfig',
        'profileRegion'   => 'ProfileRegion',
        'requestId'       => 'RequestId',
        'tenantAliasInfo' => 'TenantAliasInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idpInfos) {
            $res['IdpInfos'] = [];
            if (null !== $this->idpInfos && \is_array($this->idpInfos)) {
                $n = 0;
                foreach ($this->idpInfos as $item) {
                    $res['IdpInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->officeSiteInfo) {
            $res['OfficeSiteInfo'] = null !== $this->officeSiteInfo ? $this->officeSiteInfo->toMap() : null;
        }
        if (null !== $this->popRegionConfig) {
            $res['PopRegionConfig'] = $this->popRegionConfig;
        }
        if (null !== $this->profileRegion) {
            $res['ProfileRegion'] = $this->profileRegion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tenantAliasInfo) {
            $res['TenantAliasInfo'] = null !== $this->tenantAliasInfo ? $this->tenantAliasInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindIdpListByLoginIdentifierResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdpInfos'])) {
            if (!empty($map['IdpInfos'])) {
                $model->idpInfos = [];
                $n               = 0;
                foreach ($map['IdpInfos'] as $item) {
                    $model->idpInfos[$n++] = null !== $item ? idpInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OfficeSiteInfo'])) {
            $model->officeSiteInfo = officeSiteInfo::fromMap($map['OfficeSiteInfo']);
        }
        if (isset($map['PopRegionConfig'])) {
            $model->popRegionConfig = $map['PopRegionConfig'];
        }
        if (isset($map['ProfileRegion'])) {
            $model->profileRegion = $map['ProfileRegion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantAliasInfo'])) {
            $model->tenantAliasInfo = tenantAliasInfo::fromMap($map['TenantAliasInfo']);
        }

        return $model;
    }
}
