<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyOfficeSiteAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $desktopAccessType;

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
    protected $_name = [
        'desktopAccessType'    => 'DesktopAccessType',
        'needVerifyLoginRisk'  => 'NeedVerifyLoginRisk',
        'needVerifyZeroDevice' => 'NeedVerifyZeroDevice',
        'officeSiteId'         => 'OfficeSiteId',
        'officeSiteName'       => 'OfficeSiteName',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOfficeSiteAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
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

        return $model;
    }
}
