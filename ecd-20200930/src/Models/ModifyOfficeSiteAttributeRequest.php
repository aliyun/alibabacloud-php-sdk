<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyOfficeSiteAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $authorityHost;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var string
     */
    public $desktopAccessType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @var bool
     */
    public $needVerifyLoginRisk;

    /**
     * @var bool
     */
    public $needVerifyZeroDevice;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $vSwitchId;
    protected $_name = [
        'authorityHost' => 'AuthorityHost',
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'desktopAccessType' => 'DesktopAccessType',
        'domainName' => 'DomainName',
        'enableAdminAccess' => 'EnableAdminAccess',
        'needVerifyLoginRisk' => 'NeedVerifyLoginRisk',
        'needVerifyZeroDevice' => 'NeedVerifyZeroDevice',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'regionId' => 'RegionId',
        'tenantId' => 'TenantId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchId)) {
            Model::validateArray($this->vSwitchId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorityHost) {
            $res['AuthorityHost'] = $this->authorityHost;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }

        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }

        if (null !== $this->needVerifyLoginRisk) {
            $res['NeedVerifyLoginRisk'] = $this->needVerifyLoginRisk;
        }

        if (null !== $this->needVerifyZeroDevice) {
            $res['NeedVerifyZeroDevice'] = $this->needVerifyZeroDevice;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->vSwitchId) {
            if (\is_array($this->vSwitchId)) {
                $res['VSwitchId'] = [];
                $n1 = 0;
                foreach ($this->vSwitchId as $item1) {
                    $res['VSwitchId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AuthorityHost'])) {
            $model->authorityHost = $map['AuthorityHost'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }

        if (isset($map['NeedVerifyLoginRisk'])) {
            $model->needVerifyLoginRisk = $map['NeedVerifyLoginRisk'];
        }

        if (isset($map['NeedVerifyZeroDevice'])) {
            $model->needVerifyZeroDevice = $map['NeedVerifyZeroDevice'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = [];
                $n1 = 0;
                foreach ($map['VSwitchId'] as $item1) {
                    $model->vSwitchId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
