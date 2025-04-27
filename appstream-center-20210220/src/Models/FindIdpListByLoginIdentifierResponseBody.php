<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody\idpInfos;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody\officeSiteInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody\tenantAliasInfo;

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
     * @var string
     */
    public $profileRegion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenantAliasInfo
     */
    public $tenantAliasInfo;
    protected $_name = [
        'idpInfos' => 'IdpInfos',
        'officeSiteInfo' => 'OfficeSiteInfo',
        'popRegionConfig' => 'PopRegionConfig',
        'profileRegion' => 'ProfileRegion',
        'requestId' => 'RequestId',
        'tenantAliasInfo' => 'TenantAliasInfo',
    ];

    public function validate()
    {
        if (\is_array($this->idpInfos)) {
            Model::validateArray($this->idpInfos);
        }
        if (null !== $this->officeSiteInfo) {
            $this->officeSiteInfo->validate();
        }
        if (\is_array($this->popRegionConfig)) {
            Model::validateArray($this->popRegionConfig);
        }
        if (null !== $this->tenantAliasInfo) {
            $this->tenantAliasInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idpInfos) {
            if (\is_array($this->idpInfos)) {
                $res['IdpInfos'] = [];
                $n1 = 0;
                foreach ($this->idpInfos as $item1) {
                    $res['IdpInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->officeSiteInfo) {
            $res['OfficeSiteInfo'] = null !== $this->officeSiteInfo ? $this->officeSiteInfo->toArray($noStream) : $this->officeSiteInfo;
        }

        if (null !== $this->popRegionConfig) {
            if (\is_array($this->popRegionConfig)) {
                $res['PopRegionConfig'] = [];
                foreach ($this->popRegionConfig as $key1 => $value1) {
                    $res['PopRegionConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->profileRegion) {
            $res['ProfileRegion'] = $this->profileRegion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantAliasInfo) {
            $res['TenantAliasInfo'] = null !== $this->tenantAliasInfo ? $this->tenantAliasInfo->toArray($noStream) : $this->tenantAliasInfo;
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
        if (isset($map['IdpInfos'])) {
            if (!empty($map['IdpInfos'])) {
                $model->idpInfos = [];
                $n1 = 0;
                foreach ($map['IdpInfos'] as $item1) {
                    $model->idpInfos[$n1++] = idpInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['OfficeSiteInfo'])) {
            $model->officeSiteInfo = officeSiteInfo::fromMap($map['OfficeSiteInfo']);
        }

        if (isset($map['PopRegionConfig'])) {
            if (!empty($map['PopRegionConfig'])) {
                $model->popRegionConfig = [];
                foreach ($map['PopRegionConfig'] as $key1 => $value1) {
                    $model->popRegionConfig[$key1] = $value1;
                }
            }
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
